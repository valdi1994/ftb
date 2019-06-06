<?php

namespace App\Http\Controllers;

use App\User;
use App\UserPackage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{
    public function updateProfile(Request $request)
    {
        $user = Auth::user();
        if($request->has('email') && $request->email != null){
            $user->email = $request->email;
        }
        if($request->has('username') && $request->username != null){
            $user->username = $request->username;
        }
        if($request->has('name') && $request->name != null){
            $user->name = $request->name;
        }
        if($request->has('wallet') && $request->wallet != null){
            $user->wallet = $request->wallet;
        }
        $user->save();
        return redirect()->back();
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        return redirect('/');
    }

    public function requirePackage(Request $request)
    {
        $user = Auth::user();
        foreach ($request->package as $packageName) {
            switch ($packageName){
                case 'starter' :
                    $amount = 0.2200;
                    break;
                case 'intermediate' :
                    $amount = 0.4400;
                    break;
                case 'advanced' :
                    $amount = 1.100;
                    break;
//                case 'iron' :
//                    $amount = 5000;
//                    break;
                case 'bronze' :
                    $amount = 2.200;
                    break;
                case 'silver' :
                    $amount = 4.400;
                    break;
                case 'gold' :
                    $amount = 11.000;
                    break;
                case 'platinum' :
                    $amount = 22.000;
                    break;
                default:
                    $amount = 0;
            }
            $package = new UserPackage();
            $package->user_id = $user->id;
            $package->name = $packageName;
            $package->amount = $amount;
            $package->save();
        }
        return redirect()->back()->with('success', 'Thank you for the purchase. An agent will move the funds to your account once the payment has been verified.');
    }

    public function activate($id, $code){
        try{
            if($user = User::where('id', $id)->where('verification_code', $code)->first()){
                $user->is_verified = 1;
                $user->save();
                $this->guard()->login($user);
                return redirect()->route('payment')->with('success', 'Thank you for verifying your email. Now you can select packages you want to purchase.');
            }
            return redirect()->route('auth')->with('error', 'Something wrong happened during your email activation. Please contact Customer Support');
        }catch (\Exception $e){
            return redirect()->route('home')->with('error', 'Something wrong happened during your email activation. Please contact Customer Support');
        }
    }

    public function payment(Request $request){
        $user = Auth::user();
        $user->payment_method = $request->payment_method;

        if($request->has('wallet') && $request->wallet != null){
            $user->wallet = $request->wallet;
        }
        if($user->save()){
            return redirect()->route('package')->with('success', 'Thank you for completing your payment preferences. Now you can select your desired package.');
        }
        return redirect()->back()->with('error', 'Something went wrong while trying to update your payment preferences. Please contact Customer Support.');
    }

    protected function guard()
    {
        return Auth::guard();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NavController extends Controller
{
    public function home(){
        return view('web.page.home');
    }

    public function auth(){
        return view('web.page.auth');
    }

    public function bounty(){
        return view('web.page.bounty');
    }

    public function contact_us(){
        return view('web.page.contact_us');
    }

    public function how_to(){
        return view('web.page.how_to');
    }

    public function profile(){
        if(Auth::user()->is_verified){
            return view('web.page.profile');
        }
        return redirect('/')->with('error','Please verify your email before proceeding');
    }

    public function social(){
        return view('web.page.social');
    }

    public function white_paper(){
        return view('web.page.white_paper');
    }

    public function payment(){
        if(Auth::user()->is_verified){
            return view('web.page.currencies');
        }
        return redirect('/')->with('error','Please verify your email before proceeding');

    }

    public function package(){
        if(Auth::user()->is_verified){
            return view('web.page.packages');
        }
        return redirect('/')->with('error','Please verify your email before proceeding');
    }
}

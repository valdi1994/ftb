<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use TCG\Voyager\Models\Setting;

class User extends \TCG\Voyager\Models\User
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $username = 'username';

    protected $fillable = [
        'name', 'email', 'password', 'username', 'verification_code'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function packages(){
        return $this->hasMany(UserPackage::class, 'user_id','id');
    }

    public function getPackageCountAttribute(){
        return count($this->packages()->where('is_verified',1)->get());
    }

    public function getUnpaidPackageCountAttribute(){
        return count($this->packages()->where('is_verified',0)->get());
    }

    public function getTotalSumAttribute(){
        return $this->packages()->where('is_verified',1)->sum('amount');
    }

    public function getTotalUsdAttribute(){

        if($rate = Setting::where('key', 'site.ftb_er')->first()->value){
            return $this->getTotalSumAttribute() * $rate;
        }
        return 0;
    }

    public function getUnpaidSumAttribute(){
        return $this->packages()->where('is_verified',0)->sum('amount');
    }

    public function getUnpaidUsdAttribute(){

        if($rate = Setting::where('key', 'site.ftb_er')->first()->value){
            return $this->getUnpaidSumAttribute() * $rate;
        }
        return 0;
    }
}

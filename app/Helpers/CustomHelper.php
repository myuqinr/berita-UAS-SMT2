<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

if(!function_exists('is_admin')){
    function is_admin(){
        return Auth::user()->role == 1;
    }
}

if(!function_exists('enkripsi')){
    function enkripsi($data){
        return Crypt::encrypt($data);
    }
}

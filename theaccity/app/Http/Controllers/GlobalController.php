<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class GlobalController extends Controller
{
    public $globalinfo; 
    
    public function globalinfo(){
        
        if (Auth::user()) {   // Check is user logged in
            $userinfo = DB::table('users')->where('id','=',Auth::id())->get();
        
            $arr = new \stdClass();
            $arr->username = $userinfo[0]->name;
            $arr->number = $userinfo[0]->number;
            $arr->type = $userinfo[0]->type;
            $this->globalinfo = $arr;
            return $this->globalinfo;
        } else {
            return $this->globalinfo;
        }
        
    }
}

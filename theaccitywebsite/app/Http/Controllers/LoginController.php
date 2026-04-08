<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{ 
    public function index(Request $request  ){
        $response = [];
        $response['success'] = 0;
        $credentials = [];
        $credentials['number'] = $request->number;
        $credentials['password'] = $request->password;
        
        if (Auth::attempt($credentials)) {
            $response['success'] = 1;
        } else {
            $response['message'] = 'Number or Password Wrong';
        }
        echo json_encode($response);
    }
}

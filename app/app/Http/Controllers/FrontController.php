<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Auth;

class FrontController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function verification_data()
    {
        if ( Auth::attempt(['user' => $request->user, "password" => $request->password]) ) {
            return "ok";
        } else {
            return "error";
        }
    }
}

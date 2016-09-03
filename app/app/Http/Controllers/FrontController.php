<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
use App\Models\Category;
use App\Models\NewClass;
use App\Models\Event;

class FrontController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        $categories = Category::all();
        $newsclass = NewClass::all();
        $events = Event::all();
        return view('page.index', compact("categories", "newsclass", "events"));        
    }

    public function verification_data(Request $request)
    {
        $isAvailable = "error";

        if ( Auth::once(['user' => $request->user, "password" => $request->password]) ) {
            $isAvailable = "ok";
        } 

        return $isAvailable;
    }
}

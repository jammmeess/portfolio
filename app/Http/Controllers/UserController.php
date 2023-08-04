<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function showAbout(){
        return view('about');
    }

    public function showHome()
    {
        return view('home');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function showContact()
    {
        return view('contact');
    }

    public function showProjects()
    {
        return view('projects');
    }

    public function showExperience()
    {
        return view('experience');
    }

    public function showEducation(){
        return view('education');
    }

    public function showAbout(){
        return view('about');
    }

    public function showHome()
    {
        return view('home');
    }
}

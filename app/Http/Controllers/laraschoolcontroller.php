<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class laraschoolcontroller extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function about(){
        return view('about');
    }
    public function teacher(){
        return view('teacher.teacher');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index () {
        return view('welcome');
    }

    public function show () {
        return view('single-blog-post');
    }
}

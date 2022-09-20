<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index () {
        return view('blogPosts.blog');
    }
    public function create () {
        return view('blogPosts.create-post');
    }
    public function store (Request $req) {
        $allInputFields = $req->all();
        dd($allInputFields);
    }
    public function show () {
        return view('blogPosts.single-post');
    }
}

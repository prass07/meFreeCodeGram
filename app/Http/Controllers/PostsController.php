<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construct()  //using auth middleware to display the post route
    {
        $this->middleware('auth');
    }

    public function create(){
        return view('posts.create');
    }

    public function store(){
        $data = request()->validate([       //validating the post
            'caption' => 'required',
            'image' => ['required', 'image']
        ]);

        auth()->user()->posts()->create($data); //authenticates user goes to the users posts and creates the post

        dd(request()->all());
    }
}

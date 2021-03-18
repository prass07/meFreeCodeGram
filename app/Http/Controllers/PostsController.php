<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

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

        $imagePath = request('image')->store('uploads', 'public'); //creates a path of image to uploads directory in storage directory

        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200); //using intervention/image package to fit the image in 1200*1200 size box
        $image->save();

        auth()->user()->posts()->create([
            'caption'=> $data['caption'],
            'image' => $imagePath,
        ]); //authenticates user goes to the users posts and creates the post

        return redirect('/profile/'.auth()->user()->id); //redirects the authenticated user by id to their profile page
    }

    public function show(\App\Post $post){ //$post is the post id passed in the index.blade.php & \App\Post is used to fetch the entire post
        return view('posts.show', compact('post')); //redirecting to the view compact sends the post
    }
}

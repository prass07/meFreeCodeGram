<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class ProfilesController extends Controller
{
    public function index($user) //insted of findOrFail we can use (\App\User $user) as below
    {
        $user = User::findOrFail($user); // findOrFail either finds user or redirects to 404 Not Found

        return view('profiles.index', [ //here we can use compact(user) insted of 'user' => $user
            'user' => $user,
        ]);
    }

    public function edit(\App\User $user) //insted of \App\User u can jus right User because of line 6
    {
        $this->authorize('update', $user->profile); //authorizing user to be able to update their profile
        return view('profiles.edit',compact('user'));
    }
    
    public function update(User $user)
    {
        $this->authorize('update', $user->profile);

        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'url',
            'image' => '',
        ]);

        if(request('image')) {
            $imagePath = request('image')->store('profile', 'public'); //creates a path of image to uploads directory in storage directory

            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000, 1000); //using intervention/image package to fit the image in 1200*1200 size box
            $image->save();
    
        }

        

        auth()->user()->profile->update(array_merge(
            $data,
            ['image' => $imagePath]
        )); //authenticating the user and updating the profile
        return redirect("/profile/{$user->id}");
    }
}

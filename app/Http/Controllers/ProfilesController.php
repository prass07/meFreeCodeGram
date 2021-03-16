<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index($user)
    {
        $user = User::findOrFail($user); // findOrFail either finds user or redirects to 404 Not Found

        return view('profiles.index', [
            'user' => $user,
        ]);
    }
}

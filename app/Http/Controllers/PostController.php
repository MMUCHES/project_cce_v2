<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Foundation\Auth\User;

class PostController extends Controller

{

    public function index()
    {
        return view('admins.posts.home');
    }

}

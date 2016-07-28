<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;

use Illuminate\Http\Request;

use App\Http\Requests;

class BackController extends Controller
{
 
    public function index()
    {
        
        $posts = Post::orderBy('date', 'DESC')->take(3)->get();
        $users = User::where('role', 'first_class')->orWhere('role', 'final_class')->orderBy('id', 'DESC')->take(3)->get();
        return view('back.dashboard', compact('posts', 'users'));
    }
}

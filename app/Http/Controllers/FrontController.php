<?php

namespace App\Http\Controllers;

use Hash;
use App\User;
use App\Post;
use App\Http\Requests;
use Illuminate\Http\Request;


class FrontController extends Controller
{
    public function index()
    {         
    	$posts = Post::orderBy('date', 'DESC')->paginate(5);

    	return view('front.index', compact('posts'));
    }

    public function actualites()
    {
    	      $posts = Post::orderBy('date', 'DESC')->paginate(10);

    	return view('front.actualites', compact('posts'));
    }

    public function actualite($id)
    {
    	$post = Post::findOrFail($id);

    	return view('front.actualite', compact('post'));
    }

    public function lycee()
    {
    	return view('front.lycee');
    }

    public function mentions()
    {
    	return view('front.mentions');
    }

    public function contact()
    {
    	return view('front.contact');
    }


}

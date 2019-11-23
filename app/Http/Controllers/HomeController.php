<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function tasks()
    {
        return view('tasks');
    }

    public function contacts()
    {
        return view('contacts');
    }

    public function create () {
        return view('posts/create');
    }

    public function pIndex() {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('posts/index')->with('posts',$user->posts);
    }
}

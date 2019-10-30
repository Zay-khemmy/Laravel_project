<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;

class UserController extends Controller
{
    public function index() {
        $post = Post::where('user_id', auth()->user()->id)->get();
        return view('/post/mypost')->with('post', $post);
    }
}

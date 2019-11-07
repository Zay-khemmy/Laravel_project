<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use DB;

class CommentController extends Controller
{
    public function index(Request $request){
        $post = new Comment;
        $post->comment = $request->input('comment');
        $post->post_id = $request->input('post_id');
        $post->save();
        return back()->with('success', 'Post created successfully');
    }
}

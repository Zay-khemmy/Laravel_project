<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Post;

class PostController extends Controller
{
        // insert data to Database
    public function insert(){
        Post::create(array(
            'title' => 'Title',
            'body'  => 'The Body'
        ));
    }
        // select data from Database
    public function retrieve(){
       return $select = Post::all();  // to fetch all data from database
    //    return $select = Post::find(5); // to fetch a data with ID
    //    return $title = Post::where('title', '=', 'Title')->first(); // fetch data by value
    }
        // update database
    public function update(){
        $title = Post::where('body', '=', 'The Body')->first();
        $title->body = 'This is Post Two';
        $title->save();
    }
        // delete from database
    public function delete(){
        // $remove = Post::find(1);
        // $remove->delete();
        Post::destroy(2,5); 
    }
}

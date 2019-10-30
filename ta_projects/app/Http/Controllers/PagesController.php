<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to Laravel Tutorial';
        return view('pages.index')->with('title', $title);
    }
    public function about(){
        $title = 'About Us';
        $data = 'Its our page';
        return view('pages.about')->with('title', $title)->with('data', $data);
    }
    public function service(){
        $date= array(
            'title' => 'Services',
            'services'=> ['Website', 'Design', 'Development']
        );
        return view('pages.service')->with($date);
    }
}

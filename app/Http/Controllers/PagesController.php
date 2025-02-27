<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to Laravel!';
        // return view('pages.index', compact('title')); // alt way to do below and pass in variable
        return view('pages.index')->with('title',$title); // first variable is name to access in blade, second is the variable we are passing
    }

    public function about(){
        $title = 'Find out about here';
        return view('pages.about')->with('title',$title);
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['web design', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }
}

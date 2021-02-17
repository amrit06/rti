<?php

use Illuminate\Http\Request;

namespace App\Http\Controllers;

use Illuminate\Support\Arr;

class PagesController extends Controller
{
    public function index(){
        $var = 'amrit';
       
        //passing var to view page method 1
        return view('pages.index', compact('var'));
    }


    public function about(){
        $title= "Adventure";

         // passing var to view page method 2
        return view('pages.about')->with('title', $title);
    }


    public function service(){
        $list = array(
            'title' => 'skills',
            'programming' => 'php',
            'framework' => 'laravel',
            'coder' => ['amrit', 'quan', 'tim']
        );

        // passing array to view page
        return view('pages.service')->with($list);
    }

    public function blog(){
  
        return view('blog.index');
    }




}

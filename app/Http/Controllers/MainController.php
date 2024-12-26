<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{

    function index(){
        return view('index');
    }


    function contact(){
        return view('contact');
    }

    function resume(){
        return view('resume');
    }


    function projects(){
        return view('projects');
    }





















}

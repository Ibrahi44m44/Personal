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


    function user($name , $age){
        // return "Welcome $name Your age $age";

        /* -------------------------------------------------------------------------- */
        /*                      The First way to send vir to view                     */
        /* -------------------------------------------------------------------------- */
        // return view('user.profile')
        // ->with('name',$name)
        // ->with('age',$age);

        /* -------------------------------------------------------------------------- */
        /*                     The Second way to send vir to view                    */
        /* -------------------------------------------------------------------------- */
        // return view('user.profile' , [
        //     'name' => $name,
        //     'age' => $age
        // ]);



        /* -------------------------------------------------------------------------- */
        /*                      The Third way to send vir to view                     */
        /* -------------------------------------------------------------------------- */
        return view('user.profile' , compact('name','age'));
    }





















}

<?php

namespace App\Http\Controllers;

use App\Models\basic;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
    
        return view('welcome');

    }

  /*   public function about(){
    
        return view('about');

    }

    public function courses(){
    
        return view('courses');

    }

    public function info(){
    
        return view('info');

    }

    public function support(){
    
        return view('support');

    }

    public function sigin(){

        return view('sigin');

    }

    public function regi(){

        return view('regi');

    }
 */
}
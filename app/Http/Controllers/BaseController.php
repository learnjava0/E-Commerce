<?php

  
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Http\Controllers\BaseController;

class BaseController extends Controller
{
    // Controller logic here
    public function home(){
        return view('front.home');
    }
}


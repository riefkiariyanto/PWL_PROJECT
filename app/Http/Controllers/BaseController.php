<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function index(){
        return view('home.index');
    }

    public function login(){
        return view('login.index');
    }

    public function cp(){
        return view('main.cp');
    }
}

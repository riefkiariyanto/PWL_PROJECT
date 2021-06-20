<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function index(){
        $this->middleware('auth');
        return view('home.index');
    }

    public function login(){
        return view('login.index');
    }

    public function main(){
        return view('main.index');
    }

    public function list_order(){
        return view('list_order.index');
    }

    public function form_service(){
        return view('form_service.index');
    }
}

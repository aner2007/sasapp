<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin');
    }
    public function index2(){
        return view('admin2');
    }
    public function index3(){
        return view('admin3');
    }
    

}

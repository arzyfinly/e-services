<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('index');
    }
    public function about(){
        return view('about');
    }
    public function pesan(){
        return view('pesan');
    }
    public function admin(){
        return view('admin');
    }
}
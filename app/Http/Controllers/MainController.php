<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\_daftar_barang;
use App\Models\pwl_kuis_1;

class MainController extends Controller
{
    public function index(){
        return view('index');
    }public function about(){
        return view('about');
    }public function blog(){
        return view('blog');
    }public function contact(){
        return view('contact');
    }public function welcome(){
        return view('welcome');
    }public function barang(){
    }
 };

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index (){
        echo "Selamat Datang";
    }
    public function about (){
        echo "NIM : 1941720183";
        echo "NAMA : Gilang Permana Putra";

    }
    public function articles ($id){
        echo "Halaman Utama";
    }
}

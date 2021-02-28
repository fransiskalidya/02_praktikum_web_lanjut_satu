<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    }
    public function about(){
        return 'NIM = 1941720106 <br> Nama = Fransiska Lidya Kartika';
    }
    public function articles($id){
        return 'Halaman Artikel dengan id '. $id;
    }
}

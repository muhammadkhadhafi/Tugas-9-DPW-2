<?php

namespace App\Http\Controllers;

class HomeController extends Controller{

    function showBeranda(){
        return view('beranda');
    }

    function showProduk(){
        return view('produk');
    }

    function showKategori(){
        return view('kategori');
    }

    function showUser(){
        return view('user');
    }

    function showProfile(){
        return view('profile');
    }

}
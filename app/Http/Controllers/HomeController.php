<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return "Selamat belajar";
    }
    public function nama()
    {
        return('ini ada di controller');
    }
    public function tampilview()
    {
        return view('cetak.cetaknama');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function berandaBackend() 
    { 
        $data= [
            'judul' => 'Beranda Web',
            'isi' => 'ini adalah beranda web project uas saya'
        ];
        return view('backend.v_beranda.index',$data);
    } 
}

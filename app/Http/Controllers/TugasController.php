<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TugasController extends Controller
{
    public function getTable()
    {
        return view('tugas.view-table') ;  
    }
    public function getForm()
    {
        return view('tugas.view-form'); 
    }
}

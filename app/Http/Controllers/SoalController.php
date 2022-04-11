<?php

namespace App\Http\Controllers;

use App\Models\Soal;
use Illuminate\Http\Request;

class SoalController extends Controller
{
    public function index()
    {
        $soals = Soal::All();
        //dd($soals);
        return view('soal.index', compact('soals'));
    }

    public function create()
    {
        return view('soal.create');
    }
}

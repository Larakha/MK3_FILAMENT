<?php

namespace App\Http\Controllers;

use App\Models\landingpage; // Pastikan Anda mengimpor model
use Illuminate\Http\Request;

class landingController extends Controller
{
    public function index()
    {
        $landingpages = landingpage::all(); 
        return view('index', compact('landingpages'));
    }
}

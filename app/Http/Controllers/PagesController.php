<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        return view('home');
    }

    public function foto() {
        return view('foto');
    }

    public function video() {
        return view('video');
    }

    public function locations() {
        return view('locations');
    }
    
    public function dashboard() {
        return view('dashboard');
    }

}

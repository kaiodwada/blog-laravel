<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('dashboard.home');
    }

    public function categories()
    {
        return view('categories');
    }

    public function knowledge()
    {
        return view('dashboard.knowledge');
    }

    public function editors()
    {
        return view('dashboard.editors');
    }
}

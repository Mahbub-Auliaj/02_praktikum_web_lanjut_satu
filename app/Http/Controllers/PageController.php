<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $data = product::all();
        return view('layouts.product',['page' => $data]);
    }

    
}

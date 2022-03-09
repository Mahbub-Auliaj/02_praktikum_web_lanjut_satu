<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('layouts.app')
            ->with('title','home');
    }
    public function table() {
        $data = Product::all();
        return view('layouts.product',['page' => $data]);
    }

}

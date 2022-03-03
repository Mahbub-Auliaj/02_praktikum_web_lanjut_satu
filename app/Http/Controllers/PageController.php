<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }
    public function about() {
        return 'NIM 2041720145 nama Mahbub Auliaur Rahman';
    }
    public function articles($id) {
        return 'Ini adalah artikel ke-' .$id;
    }
    
}

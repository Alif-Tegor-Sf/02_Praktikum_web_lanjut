<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }

    public function about() {
        return 'NIM 1841720219 Alif Tegor Surya Faridzki';
    }

    public function article($id) {
        return 'Halaman artikel dengan ID' .$id;
    }
}
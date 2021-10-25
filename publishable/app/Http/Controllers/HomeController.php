<?php

namespace App\Http\Controllers;

use Alangiacomin\LaravelCqrs\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
}

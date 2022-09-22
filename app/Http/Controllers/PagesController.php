<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return "HI EVERYONE";
    }

    public function LARAVEL()
    {
        return "LARAVEL PAGE";
    }
}

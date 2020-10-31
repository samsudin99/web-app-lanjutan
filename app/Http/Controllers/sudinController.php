<?php

namespace App\Http\Controllers;

class sudinController extends Controller
{
    public function satu()
    {
        return view("sudin-1");
    }

    public function dua()
    {
        return view("sudin-2");
    }

    public function tiga()
    {
        return view("sudin-3");
    }
}
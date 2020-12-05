<?php

namespace App\Http\Controllers;

class samsudinController extends Controller
{
    public function one()
    {
        return view("samsudin-1");
    }

    public function two()
    {
        return view("samsudin-2");
    }

    public function three()
    {
        return view("samsudin-3");
    }

    public function index()
    {
        return view("test-tema"); // view dengan template
    }
}
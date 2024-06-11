<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class trainController extends Controller
{
    public function index() {
        return view("home");
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KampusController extends Controller
{
    // KampusController.php
    public function index()
    {
        return view('kampus');
    }
}

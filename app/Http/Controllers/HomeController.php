<?php

namespace App\Http\Controllers;

use App\Models\Expert;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $experts = implode(', ', Expert::pluck('name')->toArray());
        $portfolio = Portfolio::first();

        return view('home', compact('experts', 'portfolio'));
    }
}

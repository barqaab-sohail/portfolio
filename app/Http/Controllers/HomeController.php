<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Expert;
use App\Models\Education;
use App\Models\Portfolio;
use App\Models\Experience;
use App\Models\Training;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {


        $experts = implode(', ', Expert::pluck('name')->toArray());
        $portfolio = Portfolio::first();
        $skills = Skill::all();
        $educations = Education::all();
        $experiences = Experience::all();
        $trainings = Training::all();
        return view('home', compact('experts', 'portfolio', 'skills', 'educations', 'experiences', 'trainings'));
    }
}

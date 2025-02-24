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


        $experts = implode(', ', Expert::orderBy('placement', 'ASC')->where('status', 1)->pluck('name')->toArray());
        $portfolio = Portfolio::first();
        $skills = Skill::orderBy('placement', 'ASC')->where('status', 1)->get();
        $educations = Education::orderBy('placement', 'ASC')->where('status', 1)->get();
        $experiences = Experience::orderBy('placement', 'ASC')->where('status', 1)->get();
        $trainings = Training::orderBy('placement', 'ASC')->where('status', 1)->get();
        return view('home', compact('experts', 'portfolio', 'skills', 'educations', 'experiences', 'trainings'));
    }

    public function contactusform(Request $request)
    {
        return 'ok';
    }
}

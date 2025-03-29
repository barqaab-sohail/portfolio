<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Expert;
use App\Models\Project;
use App\Models\Service;
use App\Models\Training;
use App\Models\ContactUs;
use App\Models\Education;
use App\Models\Portfolio;
use App\Models\Experience;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\ProjectCategory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Config;


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
        $projectCategories = ProjectCategory::with('project')->get();
        $projects = Project::with('projectImage', 'projectCategory')->get();
        $services = Service::orderBy('placement', 'ASC')->where('status', 1)->get();
        // dd($projects);
        return view('home', compact('experts', 'portfolio', 'skills', 'educations', 'experiences', 'trainings', 'projectCategories', 'projects', 'services'));
    }

    public function contactusform(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:120',
            'email' => 'required|email:rfc,dns|max:120',
            'subject' => 'required|max:120',
            'message' => 'required|max:1000',
        ]);


        // Build POST request to get the reCAPTCHA v3 score from Google
        $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
        $recaptcha_secret = Config::get('services.recaptcha.secret'); // Insert your secret key here
        $recaptcha_response = $request->recaptcha_response;

        // Make the POST request
        $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);

        if (strpos($recaptcha, '"success": false') !== false) {
            return  response()->json(array('error' => "Google Recaptcha is expired.  Please refresh the page and try again", 'code'      =>  404,), 404);
        }



        ContactUs::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ]);

        return 'data receveid from frontend ok';
    }

    public function project_detail($project_id)
    {
        $project = Project::with('projectImages', 'projectCategory', 'projectDetail')->find($project_id);
        $portfolio = Portfolio::first();
        return view('project_detail', compact('project', 'portfolio'));
    }
}
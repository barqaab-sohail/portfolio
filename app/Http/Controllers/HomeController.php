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
use App\Models\ProjectCategory;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    /**
     * Fallback profile keeps the public pages renderable on a fresh install.
     */
    private function portfolio(): Portfolio
    {
        return Portfolio::first() ?? new Portfolio([
            'name' => config('app.name', 'Portfolio'),
            'job_title' => 'Developer',
            'city' => '',
            'email' => '',
            'phone' => '',
            'web' => url('/'),
            'degree' => '',
            'freelance_status' => '',
            'introduction' => 'Portfolio content can be managed from the Filament admin panel.',
            'picture' => '',
            'banner' => '',
        ]);
    }

    /**
     * Show the public portfolio page with all active content blocks.
     */
    public function index()
    {
        $experts = implode(', ', Expert::orderBy('placement', 'ASC')->where('status', 1)->pluck('name')->toArray());
        $portfolio = $this->portfolio();
        $skills = Skill::orderBy('placement', 'ASC')->where('status', 1)->get();
        $educations = Education::orderBy('placement', 'ASC')->where('status', 1)->get();
        $experiences = Experience::orderBy('placement', 'ASC')->where('status', 1)->get();
        $trainings = Training::orderBy('placement', 'ASC')->where('status', 1)->get();
        $projectCategories = ProjectCategory::with('project')->get();
        $projects = Project::with('projectImage', 'projectCategory')->get();
        $services = Service::orderBy('placement', 'ASC')->where('status', 1)->get();

        return view('home', compact('experts', 'portfolio', 'skills', 'educations', 'experiences', 'trainings', 'projectCategories', 'projects', 'services'));
    }

    /**
     * Validate and store messages submitted from the public contact form.
     */
    public function contactusform(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:120',
            'email' => 'required|email:rfc,dns|max:120',
            'subject' => 'required|max:120',
            'message' => 'required|max:1000',
        ]);

        // Verify the reCAPTCHA v3 token server-side before saving the message.
        $recaptcha_secret = Config::get('services.recaptcha.secret');
        $recaptcha_response = $request->recaptcha_response;

        if (!$recaptcha_response) {
            return response()->json(['error' => 'reCAPTCHA token is missing.'], 400);
        }

        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => $recaptcha_secret,
            'response' => $recaptcha_response,
            'remoteip' => $request->ip(), // Optional but recommended
        ]);

        $recaptcha_data = $response->json();

        // Google returns success=false for expired, invalid, or reused tokens.
        if (!($recaptcha_data['success'] ?? false)) {
            return response()->json([
                'error' => 'Google reCAPTCHA failed. Token might be expired or invalid.',
                'code' => 403,
            ], 403);
        }

        ContactUs::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'subject' => $validated['subject'],
            'message' => $validated['message'],
        ]);

        return 'data receveid from frontend ok';
    }

    /**
     * Show one project with its category, detail record, and gallery images.
     */
    public function project_detail($project_id)
    {
        $project = Project::with('projectImages', 'projectCategory', 'projectDetail')->find($project_id);
        $portfolio = $this->portfolio();
        return view('project_detail', compact('project', 'portfolio'));
    }
}

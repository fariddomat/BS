<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\About;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:superadministrator']);
    }

    public function create()
    {
        $about = About::first();
        return view('dashboard.about.create', compact('about'));
    }

    public function store(Request $request)
    {
        $rules = [
            'ar.about_me' => ['required'],
            'en.about_me' => ['required'],
            'ar.brief' => ['required'],
            'en.brief' => ['required'],
            'ar.who' => ['required'],
            'en.who' => ['required'],
            'ar.history' => ['required'],
            'en.history' => ['required'],
            'ar.massage' => ['required'],
            'en.massage' => ['required'],
            'ar.goals' => ['required'],
            'en.goals' => ['required'],
            'ar.vision' => ['required'],
            'en.vision' => ['required'],
            'ar.ambition' => ['required'],
            'en.ambition' => ['required'],
            'ar.values' => ['required'],
            'en.values' => ['required'],
        ];
        $validatedData = $request->validate($rules);

        $about =  About::firstOrNew();


        $about->translateOrNew('en')->about_me = $validatedData['en']['about_me'];
        $about->translateOrNew('ar')->about_me = $validatedData['ar']['about_me'];
        $about->translateOrNew('en')->brief = $validatedData['en']['brief'];
        $about->translateOrNew('ar')->brief = $validatedData['ar']['brief'];
        $about->translateOrNew('en')->who_are_we = $validatedData['en']['who'];
        $about->translateOrNew('ar')->who_are_we = $validatedData['ar']['who'];
        $about->translateOrNew('en')->history = $validatedData['en']['history'];
        $about->translateOrNew('ar')->history = $validatedData['ar']['history'];
        $about->translateOrNew('en')->massage = $validatedData['en']['massage'];
        $about->translateOrNew('ar')->massage = $validatedData['ar']['massage'];
        $about->translateOrNew('en')->goals = $validatedData['en']['goals'];
        $about->translateOrNew('ar')->goals = $validatedData['ar']['goals'];
        $about->translateOrNew('en')->vision = $validatedData['en']['vision'];
        $about->translateOrNew('ar')->vision = $validatedData['ar']['vision'];
        $about->translateOrNew('en')->ambition = $validatedData['en']['ambition'];
        $about->translateOrNew('ar')->ambition = $validatedData['ar']['ambition'];
        $about->translateOrNew('en')->values = $validatedData['en']['values'];
        $about->translateOrNew('ar')->values = $validatedData['ar']['values'];
        $about->save();
        session()->flash('success', 'About Updated Successfully');
        return redirect()->route('dashboard.home');
    }
}

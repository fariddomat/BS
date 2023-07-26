<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Info;

class HomeInfoController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:superadministrator']);
    }

    public function create()
    {
        $info = Info::find(1);
        return view('dashboard.homeinfo.create', compact('info'));
    }
    public function store(Request $request)
    {
        $rules = [
            'ar.title' => ['required'],
            'en.title' => ['required'],
            'ar.description' => ['required'],
            'en.description' => ['required'],
            'ar.work' => ['required'],
            'en.work' => ['required'],
            'ar.work_description' => ['required'],
            'en.work_description' => ['required'],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,webp'],
            'logo' => ['nullable', 'image', 'mimes:jpeg,png,jpg,webp'],
            'about_me_image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,webp'],
            'service_image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,webp'],
        ];
        $validatedData = $request->validate($rules);

        $info =  Info::find(1);
        if (is_null($info)) {
            $info = new Info();
        }

        $info->translateOrNew('en')->title = $validatedData['en']['title'];
        $info->translateOrNew('ar')->title = $validatedData['ar']['title'];
        $info->translateOrNew('en')->description = $validatedData['en']['description'];
        $info->translateOrNew('ar')->description = $validatedData['ar']['description'];
        $info->translateOrNew('en')->work = $validatedData['en']['work'];
        $info->translateOrNew('ar')->work = $validatedData['ar']['work'];
        $info->translateOrNew('en')->work_description = $validatedData['en']['work_description'];
        $info->translateOrNew('ar')->work_description = $validatedData['ar']['work_description'];
        if ($request->has('image')) {
            Storage::disk('s3')->delete($info->image);
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $info->image = $image->storePubliclyAs('photos/home', $filename, 's3');
        }
        if ($request->has('logo')) {
            Storage::disk('local')->delete($info->logo);
            $image = $request->file('logo');
            $filename = $image->getClientOriginalName();
            $info->logo = $image->storeAs('photos/home', $filename);
        }
        if ($request->has('about_me_image')) {
            Storage::disk('local')->delete($info->about_me_image);
            $image = $request->file('about_me_image');
            $filename = $image->getClientOriginalName();
            $info->about_me_image = $image->storeAs('photos/home', $filename);
        }
        if ($request->has('service_image')) {
            Storage::disk('local')->delete($info->service_image);
            $image = $request->file('service_image');
            $filename = $image->getClientOriginalName();
            $info->service_image = $image->storeAs('photos/home', $filename);
        }
        $info->save();
        session()->flash('success', 'Home Info Updated Successfully');
        return redirect()->route('dashboard.homeinfo.create');
    }
}

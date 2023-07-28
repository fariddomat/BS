<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Service;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:superadministrator']);
    }

    public function index()
    {
        $services = Service::orderBy('id')->paginate(50);
        return view('dashboard.services.index', compact('services'));
    }
    public function create()
    {
        $services=Service::all();
        return view('dashboard.services.create', compact('services'));
    }

    public function store(Request $request)
    {

        $rules = [
            'ar.title' => ['required'],
            'en.title' => ['required'],
            'slug' => ['required', 'unique:services,slug'],
            'ar.brief' => ['required'],
            'en.brief' => ['required'],
            'ar.main_title' => ['required'],
            'en.main_title' => ['required'],
            'ar.index_name' => ['required'],
            'en.index_name' => ['required'],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,webp'],
            'index_image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,webp'],
            'icon_class' => ['required'],
            'showed' => ['nullable'],
            'show_at_home' => ['nullable'],
        ];
        $validatedData = $request->validate($rules);

        $service = new Service();
        $service->translateOrNew('en')->title = $validatedData['en']['title'];
        $service->translateOrNew('ar')->title = $validatedData['ar']['title'];
        $service->translateOrNew('en')->brief = $validatedData['en']['brief'];
        $service->translateOrNew('ar')->brief = $validatedData['ar']['brief'];
        $service->translateOrNew('en')->main_title = $validatedData['en']['main_title'];
        $service->translateOrNew('ar')->main_title = $validatedData['ar']['main_title'];
        $service->translateOrNew('en')->index_name = $validatedData['en']['index_name'];
        $service->translateOrNew('ar')->index_name = $validatedData['ar']['index_name'];
        $service->icon_class = $validatedData['icon_class'];
        $service->parent_id=$request->parent_id;
        if ($request->has('image')) {
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $service->image = $image->storeAs('photos/services', $filename);
        }
        if ($request->has('index_image')) {
            $indexImage = $request->file('index_image');
            $filename = $indexImage->getClientOriginalName();
            $service->index_image = $indexImage->storeAs('photos/services/index', $filename);
        }
        $service->showed  = $request->has('showed') ? 1 : 0;
        $service->show_at_home  = $request->has('show_at_home') ? 1 : 0;
        $service->slug = Str::slug($validatedData['slug'], '-');
        $service->save();
        session()->flash('success', 'Service Added Successfully');
        return redirect()->route('dashboard.services.index');
    }

    public function edit(Service $service)
    {
        // dd(true);
        $services=Service::all();
        return view('dashboard.services.edit', compact('service', 'services'));
    }

    public function update(Request $request, Service $service)
    {
        $rules = [
            'ar.title' => ['required'],
            'en.title' => ['required'],
            'slug' => [
                'required',
                Rule::unique('services', 'slug')->ignore($service->id)
            ],
            'ar.brief' => ['required'],
            'en.brief' => ['required'],
            'ar.main_title' => ['required'],
            'en.main_title' => ['required'],
            'ar.index_name' => ['required'],
            'en.index_name' => ['required'],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,webp'],
            'index_image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,webp'],
            'icon_class' => ['required'],
            'showed' => ['nullable'],
            'show_at_home' => ['nullable'],
        ];
        $validatedData = $request->validate($rules);

        $service->translate('en')->title = $validatedData['en']['title'];
        $service->translate('ar')->title = $validatedData['ar']['title'];
        $service->translate('en')->brief = $validatedData['en']['brief'];
        $service->translate('ar')->brief = $validatedData['ar']['brief'];
        $service->translate('en')->main_title = $validatedData['en']['main_title'];
        $service->translate('ar')->main_title = $validatedData['ar']['main_title'];
        $service->translate('en')->index_name = $validatedData['en']['index_name'];
        $service->translate('ar')->index_name = $validatedData['ar']['index_name'];
        $service->icon_class = $validatedData['icon_class'];
        $service->parent_id=$request->parent_id;

        if ($request->has('image')) {
            Storage::disk('local')->delete($service->image);
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $service->image = $image->storeAs('photos/services', $filename);
        }
        if ($request->has('index_image')) {
            Storage::disk('local')->delete($service->index_image);
            $indexImage = $request->file('index_image');
            $filename = $indexImage->getClientOriginalName();
            $service->index_image = $indexImage->storeAs('photos/services/index', $filename);
        }
        $service->showed  = $request->has('showed') ? 1 : 0;
        $service->show_at_home  = $request->has('show_at_home') ? 1 : 0;
        $service->slug = Str::slug($validatedData['slug'], '-');
        $service->save();
        session()->flash('success', 'Service Updated Successfully');
        return redirect()->route('dashboard.services.index');
    }

    public function destroyIndexImage(Service $service)
    {
        if ($service->index_image) {
            Storage::disk('local')->delete($service->index_image);
            $service->index_image = null;
            $service->save();
        }
    }
}

<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service;
use App\ServiceIndexItem;

class ServiceIndexItemController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:superadministrator']);
    }
    public function index(Request $request, Service $service)
    {
        $indexItems = $service->indexItems()->get();
        return view('dashboard.services.indexItems.index', compact('indexItems', 'service'));
    }

    public function create(Request $request, Service $service)
    {
        return view('dashboard.services.indexItems.create', compact('service'));
    }

    public function store(Request $request, Service $service)
    {
        $rules = [
            'ar.name' => ['required'],
            'en.name' => ['required'],
            'ar.description' => ['required'],
            'en.description' => ['required'],

            'icon_class' => ['required'],
        ];
        $validatedData = $request->validate($rules);
        $item  = new ServiceIndexItem();
        $item->icon_class = $validatedData['icon_class'];
        $item->translateOrNew('en')->name = $validatedData['en']['name'];
        $item->translateOrNew('ar')->name = $validatedData['ar']['name'];
        $item->translateOrNew('en')->description = $validatedData['en']['description'];
        $item->translateOrNew('ar')->description = $validatedData['ar']['description'];
        $item->service_id = $service->id;
        $item->save();
        session()->flash('success', 'Index Item Added Successfully');
        return redirect()->route('dashboard.services.indexitems.index', $service->id);
    }

    public function edit(ServiceIndexItem $indexitem)
    {
        return view('dashboard.services.indexItems.edit', compact('indexitem'));
    }

    public function update(Request $request, ServiceIndexItem $indexitem)
    {
        $rules = [
            'ar.name' => ['required'],
            'en.name' => ['required'],
            'ar.description' => ['required'],
            'en.description' => ['required'],
            'icon_class' => ['required'],
        ];
        $validatedData = $request->validate($rules);
        $indexitem->icon_class = $validatedData['icon_class'];
        $indexitem->translate('en')->name = $validatedData['en']['name'];
        $indexitem->translate('ar')->name = $validatedData['ar']['name'];
        $indexitem->translate('en')->description = $validatedData['en']['description'];
        $indexitem->translate('ar')->description = $validatedData['ar']['description'];
        $indexitem->save();
        session()->flash('success', 'Index Item Updated Successfully');
        return redirect()->route('dashboard.services.indexitems.index', $indexitem->service_id);
    }

    public function destroy(ServiceIndexItem $indexitem)
    {
        $indexitem->deleteTranslations(['ar', 'en']);
        $indexitem->delete();
        session()->flash('success', 'Index Item Deleted Successfully');
        return redirect()->back();
    }
}

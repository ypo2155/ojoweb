<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::orderBy('id', 'DESC')->paginate(8);
        return view("admin.services", compact('services') );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.serviceupload");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $services = new Service();
        $services->ServiceText1 = $request->ServiceText1;
        $services->ServiceText2 = $request->ServiceText2;
  
        if ($request->hasFile('ServiceImg1')) {
            $imageName1 = time() . '.' . $request->ServiceImg1->extension();
            $services->ServiceImg1 = $imageName1;
            $request->ServiceImg1->storeAs('image/service', $imageName1, 'public');
        }

        if ($request->hasFile('ServiceImg2')) {
            $imageName2 = time() . '.' . $request->ServiceImg2->extension();
            $services->ServiceImg2 = $imageName2;
            $request->ServiceImg2->storeAs('image/service', $imageName2, 'public');
        }


        $services->save();
        return redirect('/ojoadmin/services')->with('success', 'service created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $service = Service::where('slug', $slug)->first();
        return view('admin.servicedetail' , compact('service') );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $service = Service::findOrFail($id);
        return view('admin.serviceedit', compact('service') );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $services = Service::findOrFail($id);
        $services->ServiceText1 = $request->ServiceText1;
        $services->ServiceText2 = $request->ServiceText2;
  
        if ($request->hasFile('ServiceImg1')) {
            Storage::disk('public')->delete('image/service/'. $services->ServiceImg1);
            $imageName1 = time() . '.' . $request->ServiceImg1->extension();
            $services->ServiceImg1 = $imageName1;
            $request->ServiceImg1->storeAs('image/service', $imageName1, 'public');
        }

        if ($request->hasFile('ServiceImg2')) {
            Storage::disk('public')->delete('image/service/'. $services->ServiceImg2);
            $imageName2 = time() . '.' . $request->ServiceImg2->extension();
            $services->ServiceImg2 = $imageName2;
            $request->ServiceImg2->storeAs('image/service', $imageName2, 'public');
        }


        $services->update();
        return redirect('/ojoadmin/services')->with('updatesuccess', 'service updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service = Service::findOrFail($id);
        Storage::disk('public')->delete('image/service/'. $service->ServiceImg1);
        Storage::disk('public')->delete('image/service/'. $service->ServiceImg2);
        $service->delete();
        return redirect('/ojoadmin/services')->with('deletesuccess', 'Deleted!');
    }
}

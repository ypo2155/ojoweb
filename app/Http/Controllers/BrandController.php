<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::orderBy('id', 'DESC')->paginate(8);
        return view('Admin.brand', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.brandupload');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $brands = new Brand();
        $brands->BrandText = $request->BrandText;


        if ($request->hasFile('BrandImg')) {
            $imageName = time() . '.' . $request->BrandImg->extension();
            $brands->BrandImg = $imageName;
            $request->BrandImg->storeAs('image/clients', $imageName, 'public');
        }


        $brands->save();
        return redirect('/ojoadmin/clients')->with('success', 'client created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $brand = Brand::findOrFail($id);
        return view('admin.brandedit', compact('brand') );
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $brands = Brand::findOrFail($id);
        $brands->BrandText = $request->BrandText;


        if ($request->hasFile('BrandImg')) {
            Storage::disk('public')->delete('image/clients/'. $brands->BrandImg);
            $imageName = time() . '.' . $request->BrandImg->extension();
            $brands->BrandImg = $imageName;
            $request->BrandImg->storeAs('image/clients', $imageName, 'public');
        }


        $brands->update();
        return redirect('/ojoadmin/clients')->with('updatesuccess', 'client updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $brand = Brand::findOrFail($id);
        Storage::disk('public')->delete('image/clients/'. $brand->BrandImg);
        $brand->delete();
        return redirect('/ojoadmin/clients')->with('deletesuccess', 'Deleted!');
    }
}

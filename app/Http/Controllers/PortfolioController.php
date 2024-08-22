<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Portfolio;


class PortfolioController extends Controller
{

    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portfolios = Portfolio::orderBy('id', 'DESC')->paginate(8);
        return view("admin.portfolio", compact('portfolios') );
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        return view("admin.portfolioupload");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $portfolios = new Portfolio();
        $portfolios->PortText1 = $request->PortText1;
        $portfolios->PortText2 = $request->PortText2;
  
        if ($request->hasFile('PortImg')) {
            $imageName = time() . '.' . $request->PortImg->extension();
            $portfolios->PortImg = $imageName;
            $request->PortImg->storeAs('image/portfolio', $imageName, 'public');
        }


        $portfolios->save();
        return redirect('/ojoadmin/portfolio')->with('success', 'portfolio created!');
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
        $portfolio = Portfolio::findOrFail($id);
        return view('admin.portfolioedit', compact('portfolio') );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $portfolio = Portfolio::findOrFail($id);
        $portfolio->PortText1 = $request->PortText1;
        $portfolio->PortText2 = $request->PortText2;
  
        if ($request->hasFile('PortImg')) {
            Storage::disk('public')->delete('image/portfolio/'. $portfolio->PortImg);
            $imageName = time() . '.' . $request->PortImg->extension();
            $portfolio->PortImg = $imageName;
            $request->PortImg->storeAs('image/portfolio', $imageName, 'public');
        }


        $portfolio->update();
        return redirect('/ojoadmin/portfolio')->with('updatesuccess', 'portfolio created!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $portfolio = Portfolio::findOrFail($id);
        Storage::disk('public')->delete('image/portfolio/'. $portfolio->PortImg);
        $portfolio->delete();
        return redirect('/ojoadmin/portfolio')->with('deletesuccess', 'Deleted!');
    }
}

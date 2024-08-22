<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Blog;
use App\Models\Brand;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::orderBy('id', 'ASC')->get();
        $services = Service::orderBy('id', 'ASC')->get();
        $portfolios = Portfolio::orderBy('id', 'DESC')->get();
        return view("ojo.index", compact('services', 'portfolios' ,'brands') );
    }

    public function about()
    {
        return view("ojo.about");
    }


    
    public function portfolio()
    {
        $portfolios = Portfolio::orderBy('id', 'DESC')->paginate(4);
        return view("ojo.portfolio", compact('portfolios') );
    }
    
 

    public function services()
    {
        $iservices = Service::orderBy('id', 'ASC')->paginate(4);
        $services = Service::orderBy('id', 'ASC')->get();
        return view("ojo.services", compact('iservices','services') );
    }
    public function servicedetail(string $slug)
    {
        $service = Service::where('slug', $slug)->first();
        $services = Service::orderBy('id', 'ASC')->get();
        return view("ojo.servicedetail", compact('services','service') );
    }



    public function news()
    {
        $news = Blog::orderBy('id', 'DESC')->paginate(4);
        $rnews = Blog::orderBy('id', 'DESC')->paginate(5);
        return view("ojo.news", compact('news','rnews') );
    }
    public function newdetail(string $slug)
    {
        $new = Blog::where('slug', $slug)->first();
        $rnews = Blog::orderBy('id', 'DESC')->paginate(5);
        return view("ojo.newdetail", compact('new','rnews') );
    }




    public function contact()
    {
        
        return view("ojo.contact");
    }

    public function faq()
    {
        return view("ojo.faq");
    }




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

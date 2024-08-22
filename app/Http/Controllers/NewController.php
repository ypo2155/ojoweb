<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Blog;
class NewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = Blog::orderBy('id', 'DESC')->paginate(8);
        
        return view("admin.news", compact('news') );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.newupload");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $new = new Blog();
        $new->NewText1 = $request->NewText1;
        $new->NewText2 = $request->NewText2;
  
        if ($request->hasFile('NewImg')) {
            $imageName = time() . '.' . $request->NewImg->extension();
            $new->NewImg = $imageName;
            $request->NewImg->storeAs('image/new', $imageName, 'public');
        }

       


        $new->save();
        return redirect('/ojoadmin/news')->with('success', 'new created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $new = Blog::where('slug', $slug)->first();
        return view('admin.newdetail' , compact('new') );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $new = Blog::findOrFail($id);
        return view('admin.newedit' , compact('new') );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $new = Blog::findOrFail($id);
        $new->NewText1 = $request->NewText1;
        $new->NewText2 = $request->NewText2;
  
        if ($request->hasFile('NewImg')) {
            Storage::disk('public')->delete('image/new/'. $new->NewImg);
            $imageName = time() . '.' . $request->NewImg->extension();
            $new->NewImg = $imageName;
            $request->NewImg->storeAs('image/new', $imageName, 'public');
        }

       


        $new->update();
        return redirect('/ojoadmin/news')->with('updatesuccess', 'new updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $new = Blog::findOrFail($id);
        Storage::disk('public')->delete('image/new/'. $new->NewImg);

        $new->delete();
        return redirect('/ojoadmin/news')->with('deletesuccess', 'Deleted!');
    }
}

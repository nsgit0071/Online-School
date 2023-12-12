<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Navbar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about = About::all();
        return view('backend.app.about.index' , [
            'abouts' => $about
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    return view('backend.app.about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request )
    {
        $request->validate([
            'photo' => 'image',
            'heading_main' => 'required',
            'heading'  => 'required',
            'paragraph' => 'required',
            'about_heading' =>'required',
            'about_icon' =>'required' ,
            'paragraph_about' => 'required',
            'button_text' => 'required',
        ]);
        if ($request->hasFile('photo')){
            $path = $request->file('photo')->store('about');
        }
        $about = About::create([

            'photo' => $path ?? null,
            'heading_main' => $request->heading_main,
            'heading'  => $request->heading,
            'paragraph' => $request->paragraph,
            'about_heading' => $request->about_heading,
            'about_icon' => $request->about_icon,
            'paragraph_about' => $request->paragraph_about,
            'button_text' => $request->button_text,
            'display' => $request->display ?? 0,
        ]);

        return redirect()->route('backend_about');

    }

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        return view('backend.app.about.show', [
            'about' => $about
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about)
    {
        return view('backend.app.about.update', [
            'about' => $about
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  About $about)
    {
        $request->validate([
            'photo' => 'image',
            'heading_main' => 'required',
            'heading'  => 'required',
            'paragraph' => 'required',
            'about_heading' =>'required',
            'about_icon' =>'required' ,
            'paragraph_about' => 'required',
            'button_text' => 'required',
        ]);
        if ($request->hasFile('photo')){
            if (isset($about->photo)){
                Storage::delete($about->photo);
            }
        }
        if ($request->hasFile('photo')){
            $path = $request->file('photo')->store('about');
        }
        $about->update([

            'photo' => $path ?? $about->photo,
            'heading_main' => $request->heading_main,
            'heading'  => $request->heading,
            'paragraph' => $request->paragraph,
            'about_heading' => $request->about_heading,
            'about_icon' => $request->about_icon,
            'paragraph_about' => $request->paragraph_about,
            'button_text' => $request->button_text,
            'display' => $request->display ?? 0,
        ]);
        return redirect()->route('backend_about');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( About $about)
    {
        if(isset($about->photo)){
            Storage::delete($about->photo);
        }
        $about->delete();
        return redirect()->route('backend_about');
    }
}

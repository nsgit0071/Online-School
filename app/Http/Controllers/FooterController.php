<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $footer = Footer::all();
        return view('backend.app.Footer.index' , [
            'footer' => $footer
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.app.Footer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'main_heading' =>'required' ,
            'telegram_link' => 'required',
            'youtube_link' => 'required',
            'insta_link' => 'required',
            'company_name' => 'required',
            'paragraph' => 'required',
            'phone' => 'required',
            'created_by' =>'required',
            'display' => 'required',
            'phone_status' => 'required',
        ]);
        $footer = Footer::create([
            'main_heading' => $request->main_heading,
            'telegram_link' => $request->telegram_link,
            'youtube_link' => $request->youtube_link,
            'insta_link' => $request->insta_link,
            'company_name' => $request->company_name,
            'paragraph' => $request->paragraph,
            'phone' => $request->phone,
            'created_by' => $request->created_by,
            'display' => $request->display ?? 0,
            'phone_status' => $request->phone_status ?? 0,
        ]);

        return redirect()->route('backend_footer_index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Footer $footer)
    {
        return view('backend.app.Footer.show' , [
            'footer' => $footer
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Footer $footer)
    {

        return view('backend.app.Footer.update' , [
            'footer' => $footer
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Footer $footer)
    {
        $request->validate([
            'main_heading' =>'required' ,
            'telegram_link' => 'required',
            'youtube_link' => 'required',
            'insta_link' => 'required',
            'company_name' => 'required',
            'paragraph' => 'required',
            'phone' => 'required',
            'created_by' =>'required',


        ]);
        $footer->update([
            'main_heading' => $request->main_heading,
            'telegram_link' => $request->telegram_link,
            'youtube_link' => $request->youtube_link,
            'insta_link' => $request->insta_link,
            'company_name' => $request->company_name,
            'paragraph' => $request->paragraph,
            'phone' => $request->phone,
            'created_by' => $request->created_by,
            'display' => $request->display ?? 0,
            'phone_status' => $request->phone_status ?? 0,
        ]);
        return redirect()->route('backend_footer_index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Footer $footer)
    {
        $footer->delete();
        return redirect()->route('backend_footer_index');
    }
}

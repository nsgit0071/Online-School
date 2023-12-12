<?php

namespace App\Http\Controllers;

use App\Models\Header;
use App\Models\Navbar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $header = Header::all();
        return view('backend.app.header.index' , [
            'header' => $header
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.app.header.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'heading' => 'required',
            'paragraph'  => 'required',
            'button_text' => 'required',
            'youtube_link' => 'required',

        ]);
        $header = Header::create([
            'heading' => $request->heading,
            'paragraph'  => $request->paragraph,
            'button_text' => $request->button_text,
            'youtube_link' => $request->youtube_link,
            'display' => $request->display ?? 0,

        ]);

        return redirect()->route('backend_header');
    }

    /**
     * Display the specified resource.
     */
    public function show(Header $header)
    {
        return view('backend.app.header.show' ,[
            'header' => $header
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Header $header)
    {
        $request->validate([
            'heading' => 'required',
            'paragraph'  => 'required',
            'button_text' => 'required',
            'youtube_link' => 'required',

        ]);
    return view('backend.app.header.update' , [
        'header' => $header
    ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request , Header $header )
    {
        $request->validate([
            'heading' => 'required',
            'paragraph'  => 'required',
            'button_text' => 'required',
            'youtube_link' => 'required',

        ]);
        $header->update([
            'heading' => $request->heading,
            'paragraph'  => $request->paragraph,
            'button_text' => $request->button_text,
            'youtube_link' => $request->youtube_link,
            'display' => $request->display ?? 0,
        ]);
        return redirect()->route('backend_header');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Header $header)
    {

        $header->delete();
        return redirect()->route('backend_header');
    }
}

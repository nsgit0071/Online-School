<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faq = Faq::all();
        return view('backend.app.Faq.index' , [
            'faqs' => $faq
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.app.Faq.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'heading' => 'required',
            'bold' => 'required',
            'paragraph' =>'required' ,
            'link' =>'required' ,
        ]);
        $faq = Faq::create([
            'heading' => $request->heading,
            'bold' => $request->bold,
            'paragraph' => $request->paragraph,
            'link' => $request->link,
            'status' => $request->status ?? 0
        ]);

        return redirect()->route('backend_faq_index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Faq $faq)
    {
        return view('backend.app.Faq.show' , [
            'faq' => $faq
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Faq $faq)
    {
        return view('backend.app.Faq.update' , [
            'faq' => $faq
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  Faq $faq)
    {
        $request->validate([
            'heading' => 'required',
            'bold' => 'required',
            'paragraph' =>'required' ,
            'link' =>'required' ,
        ]);
        $faq->update([
            'heading' => $request->heading,
            'bold' => $request->bold,
            'paragraph' => $request->paragraph,
            'link' => $request->link,
            'status' => $request->status ?? 0
        ]);
        return redirect()->route('backend_faq_index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Faq $faq)
    {
        $faq->delete();
        return redirect()->route('backend_faq_index');
    }
}

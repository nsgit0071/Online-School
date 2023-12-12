<?php

namespace App\Http\Controllers;

use App\Http\Requests\NavRequest;
use App\Models\Navbar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NavController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $navbar = Navbar::all();
        return view('backend.app.nav.nav' , [
            'navbar' => $navbar
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $navbar = Navbar::all();
        return view('backend.app.nav.create', [
            'navbar' => $navbar
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NavRequest $request)
    {
        $request->validate([
            'logo' => 'image',
            'first_link' => 'required',
            'second_link'  => 'required',
            'third_link' => 'required',
            'fourth_link' => 'required',
            'fifth_link' => 'required',
            'sixth_link' => 'required',
            'phone_number' => 'required',

        ]);
        if ($request->hasFile('logo')){
            $path = $request->file('logo')->store('logo');
        }
        $nav = Navbar::create([

            'logo' => $path ?? null,
            'first_link' => $request->first_link,
            'second_link'  => $request->second_link,
            'third_link' => $request->third_link,
            'fourth_link' => $request->fourth_link,
            'fifth_link' => $request->fifth_link,
            'sixth_link' => $request->sixth_link,
            'phone_number' => $request->phone_number,
            'display' => $request->display ?? 0,
        ]);

        return redirect()->route('backend_nav')->with('error' , 'Muafaqiyatli malumotni junatdingiz');
    }


    /**
     * Display the specified resource.
     */
    public function show( Navbar $navbar)
    {
        return view('backend.app.nav.show', [
            'navbar' => $navbar
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Navbar $navbar)
    {

        return view('backend.app.nav.update' , [
            'nav' => $navbar
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NavRequest $request, Navbar $navbar)
    {
        $request->validate([
            'logo' => 'image',
            'first_link' => 'required',
            'second_link'  => 'required',
            'third_link' => 'required',
            'fourth_link' => 'required',
            'fifth_link' => 'required',
            'sixth_link' => 'required',
            'phone_number' => 'required',

        ]);
       if ($request->hasFile('logo')){
           if (isset($navbar->logo)){
               Storage::delete($navbar->logo);
           }
       }
        if ($request->hasFile('logo')){
            $path = $request->file('logo')->store('logo');
        }
       $navbar->update([
           'logo' => $path ?? $navbar->logo,
           'first_link' => $request->first_link,
           'second_link'  => $request->second_link,
           'third_link' => $request->third_link,
           'fourth_link' => $request->fourth_link,
           'fifth_link' => $request->fifth_link,
           'sixth_link' => $request->sixth_link,
           'phone_number' => $request->phone_number,
           'display' => $request->display ?? 0,
       ]);
return redirect()->route('backend_nav');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Navbar $navbar)
    {
        if(isset($navbar->logo)){
            Storage::delete($navbar->logo);
        }
        $navbar->delete();
        return redirect()->route('backend_nav');
    }
}

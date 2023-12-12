<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Navbar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $company = Company::all();
        return view('backend.app.company.index' , [
            'company' => $company
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.app.company.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $request->validate([
        'photo' => 'image',
        'title' => 'required',
    ]);
        if ($request->hasFile('photo')){
            $path = $request->file('photo')->store('company');
        }
        $company = Company::create([

            'photo' => $path ?? null,
            'title' => $request->title,
            'status' => $request->status ?? 0,
        ]);

        return redirect()->route('backend_company_index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        return view('backend.app.company.show' , [
            'company' => $company
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {

        return view('backend.app.company.update' , [
            'company' => $company
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Company $company)
    {
        $request->validate([
            'photo' => 'image',
            'title' => 'required',
        ]);
        if ($request->hasFile('photo')){
            if (isset($navbar->photo)){
                Storage::delete($navbar->photo);
            }
        }
        if ($request->hasFile('photo')){
            $path = $request->file('photo')->store('logo');
        }
        $company->update([
            'photo' => $path ?? $company->photo,
            'title' => $request->title,
            'status' => $request->status ?? 0,

        ]);
        return redirect()->route('backend_company_index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        if(isset($navbar->photo)){
            Storage::delete($company->photo);
        }
        $company->delete();
        return redirect()->route('backend_company_index');
    }
}

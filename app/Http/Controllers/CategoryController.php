<?php

namespace App\Http\Controllers;

use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::all();
        return view('backend.app.category.index' ,  [
        'category' => $category
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('backend.app.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',

        ]);
        $category = Category::create([
            'name' => $request->name,
        ]);

        return redirect()->route('backend_category_index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view('backend.app.category.show' , [
            'category' => $category
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('backend.app.category.update' , [
            'category' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required',

        ]);
        $category->update([
            'name' => $request->name,
        ]);
        return redirect()->route('backend_category_index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('backend_category_index');
    }
}

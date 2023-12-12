<?php

namespace App\Http\Controllers;

use App\Models\CourseHead;
use Illuminate\Http\Request;

class CourseHeadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courseHead = CourseHead::all();
        return view('backend.app.courseHead.index' , [
            'courseHead' => $courseHead
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.app.courseHead.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'heading' => 'required',
            'paragraph'  => 'required',
        ]);
        $course_heading = CourseHead::create([
            'heading' => $request->heading,
            'paragraph'  => $request->paragraph,
            'status' => $request->status ?? 0,

        ]);

        return redirect()->route('backend_courseHead_index');

    }

    /**
     * Display the specified resource.
     */
    public function show(CourseHead $courseHead)
    {
        return view('backend.app.courseHead.show' , [
            'courseHead' => $courseHead
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CourseHead $courseHead)
    {

        return view('backend.app.courseHead.update' , [
            'courseHead' => $courseHead
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CourseHead $courseHead)
    {
        $request->validate([
            'heading' => 'required',
            'paragraph'  => 'required',
        ]);
        $courseHead->update([
            'heading' => $request->heading,
            'paragraph'  => $request->paragraph,
            'status' => $request->status ?? 0,

        ]);
        return redirect()->route('backend_courseHead_index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CourseHead $courseHead)
    {
        $courseHead->delete();
        return redirect()->route('backend_courseHead_index');

    }
}

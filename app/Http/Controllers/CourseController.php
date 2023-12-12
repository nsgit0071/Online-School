<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\CourseHead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $course = Course::all();
        return view('backend.app.course.index' , [
            'course' => $course
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::all();
        return view('backend.app.course.create' , [
            'category' => $category
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'image',
            'heading'  => 'required',
            'paragraph_view'  =>'required' ,
            'phone'  => 'required',
            'title'  => 'required',
            'category_id'  => 'required',
            'content_main'  => 'required',
            'youTube_link'  => 'required',
            'prise'  =>'required' ,
            'telegram_link'  => 'required',
            'telegram_admin'  => 'required',
            'book_page'  => 'required',
            'pro'  =>'required' ,
            'lesson_time'  => 'required',
            'block_icon'  => 'required',
        ]);
        if ($request->hasFile('photo')){
            $path = $request->file('photo')->store('course');
        }
        $course = Course::create([
            'photo' => $path ?? null ,
            'heading'  => $request->heading,
            'paragraph_view'  => $request->paragraph_view,
            'phone'  => $request->phone,
            'title'  => $request->title,
            'category_id'  => $request->category_id,
            'content_main'  => $request->content_main,
            'youTube_link'  => $request->youTube_link,
            'prise'  => $request->prise,
            'telegram_link'  => $request->telegram_link,
            'telegram_admin'  => $request->telegram_admin,
            'book_page'  => $request->book_page,
            'pro'  => $request->pro,
            'lesson_time'  => $request->lesson_time,
            'block_icon'  => $request->block_icon,
            'status' => $request->status ,
            'display'  => $request->display ??  0,

        ]);

        return redirect()->route('backend_course_index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        return view('backend.app.course.show' , [
            'course' => $course,
        ]);
    }
    public function view($id)
    {
    $course = Course::find($id);
        return view('frontend.course.show' , [
            'course' => $course,

        ]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        $category = Category::all();

        return view('backend.app.course.update' , [
            'course' => $course,
            'category' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        $request->validate([
            'photo' => 'image',
            'heading'  => 'required',
            'paragraph_view'  =>'required' ,
            'phone'  => 'required',
            'title'  => 'required',
            'category_id'  => 'required',
            'content_main'  => 'required',
            'youTube_link'  => 'required',
            'prise'  =>'required' ,
            'telegram_link'  => 'required',
            'telegram_admin'  => 'required',
            'book_page'  => 'required',
            'pro'  =>'required' ,
            'lesson_time'  => 'required',
            'block_icon'  => 'required',
        ]);
        if ($request->hasFile('photo')){
            if (isset($course->photo)){
                Storage::delete($course->photo);
            }
        }
        if ($request->hasFile('photo')){
            $path = $request->file('photo')->store('logo');
        }
        $course->update([
            'photo' => $path ?? $course->photo ,
            'heading'  => $request->heading,
            'paragraph_view'  => $request->paragraph_view,
            'phone'  => $request->phone,
            'title'  => $request->title,
            'category_id'  => $request->category_id,
            'content_main'  => $request->content_main,
            'youTube_link'  => $request->youTube_link,
            'prise'  => $request->prise,
            'telegram_link'  => $request->telegram_link,
            'telegram_admin'  => $request->telegram_admin,
            'display'  => $request->display ?? 0,
            'book_page'  => $request->book_page,
            'pro'  => $request->pro,
            'lesson_time'  => $request->lesson_time,
            'block_icon'  => $request->block_icon,
            'status' => $request->status ,

        ]);

        return redirect()->route('backend_course_index' , ['course' => $course->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        if(isset($course->photo)){
            Storage::delete($course->photo);
        }
        $course->delete();
        return redirect()->route('backend_course_index');
    }
}

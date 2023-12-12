<?php

namespace App\Http\Controllers;

use App\Models\CourseHead;
use App\Models\MessageHead;
use http\Message;
use Illuminate\Http\Request;

class MessageHeadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $message = MessageHead::all();
        return view('backend.app.messageHead.index' , [
            'message' => $message
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.app.messageHead.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
 $request->validate([
     'main_paragraph' => 'required',
     'heading'  => 'required',
     'paragraph'  => 'required',
     'message_heading'  => 'required',
     'btn_text'  => 'required',
 ]);
        $messageHead = MessageHead::create([
            'main_paragraph' => $request->main_paragraph,
            'heading'  => $request->heading,
            'paragraph'  => $request->paragraph,
            'message_heading'  => $request->message_heading,
            'btn_text'  => $request->btn_text,
            'status' => $request->status ?? 0,

        ]);
        return redirect()->route('backend_messageHead_index');

    }

    /**
     * Display the specified resource.
     */
    public function show(MessageHead $messageHead)
    {
        return view('backend.app.messageHead.show' , [
            'messageHead' =>  $messageHead
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MessageHead $messageHead)
    {
        return view('backend.app.messageHead.update' , [
            'messageHead' => $messageHead
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MessageHead $messageHead)
    {
        $request->validate([
            'main_paragraph' => 'required',
            'heading'  => 'required',
            'paragraph'  => 'required',
            'message_heading'  => 'required',
            'btn_text'  => 'required',
        ]);
        $messageHead->update([
            'main_paragraph' => $request->main_paragraph,
            'heading'  => $request->heading,
            'paragraph'  => $request->paragraph,
            'message_heading'  => $request->message_heading,
            'btn_text'  => $request->btn_text,
            'status' => $request->status ?? 0,
        ]);
        return redirect()->route('backend_messageHead_index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MessageHead $messageHead)
    {
       $messageHead->delete();
        return redirect()->route('backend_messageHead_index');
    }
}

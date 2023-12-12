<?php

namespace App\Http\Controllers;


use App\Http\Requests\MessageRequest;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $message = Message::all();
        return view('backend.app.message.index' , [
            'message' => $message
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MessageRequest $request)
    {
        $message = Message::create([
            'user_id' => auth()->user()->id,
            'name' => $request->name,
            'last_name'  => $request->last_name,
            'subject' => $request->subject,
            'body' => $request->body,
            'status' => $request->status ?? 0,

        ]);
        return redirect()->route('main')->with('error' , 'Muafaqiyatli malumotni junatdingiz');

    }

    /**
     * Display the specified resource.
     */
    public function show(Message $message)
    {
        return view('backend.app.message.show' , [
            'messages' => $message
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Message $message)
    {
        $message->update([
            'status' => $request->status ?? 0,
        ]);
        return redirect()->route('backend_message');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $message)
    {
        $message->delete();
        return redirect()->route('backend_message');
    }
}

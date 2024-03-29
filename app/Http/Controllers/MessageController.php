<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\Contactmail;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    private $columns = [
        'firstName',
        'lastName',
        'email',
        'message',
        'read',


    ];
    public function index()
    {
        $messages = Message::get();
        return view('messageList', compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addMessage');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $messages = $this->messages();
        $data = $request->validate([

            'firstName' => 'required|string',
            'lastName' => 'required|string',
            'email' => 'required|string',
            'message' => 'required|string',

        ], $messages);

        // $data = $request->only($this->columns);
        $data['read'] = 0;

        try {
            Message::create($data);
        } catch (\Exception $e) {
            // Log or dd the exception to identify the issue
            dd($e->getMessage());
        }
        // dd($data);

        // Message::create($data);

        Mail::to('amira_eltaher@gmail.com')->send(new Contactmail($data));
        return redirect()->back()->with('success', 'Email sent successfully!');



        // return redirect('showMessage');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $messages = Message::all();
        $message = Message::findOrFail($id);
        $message->update(['read' => 1]);
        return view('showMessage', compact('message', 'messages'));
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Message::where('id', $id)->forceDelete();
        return redirect('messageList');
    }

    public function messages()
    {
        return [
            'firstName.required' => 'Please enter your first name!',
            'lastName.required' => 'Please enter your first name!',
            'email.required' => 'Please enter your email!',
            'message.required' => 'Please enter your message!',
        ];
    }
}

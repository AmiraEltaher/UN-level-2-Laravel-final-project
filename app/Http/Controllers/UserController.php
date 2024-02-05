<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    private $columns = [

        'fullName',
        'userName',
        'email',
        'password',
        'active',


    ];
    public function index()
    {
        $messages = Message::all();
        $users = User::get();
        return view('userList', compact('users', 'messages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $messages = Message::all();
        return view('addUser', compact('messages'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $messages = $this->messages();

        $data = $request->validate([

            'fullName' => 'required|string',
            'userName' => 'required|string',
            'email' => 'required|email',
            'password' => 'required',

        ], $messages);

        $data['password'] = Hash::make($request['password']);

        $data = $request->only($this->columns);

        // Convert 'on' to 1, and null or absent to 0
        $data['active'] = $request->has('active') ? true : false;
        $data['email_verified_at']  = now();
        User::create($data);

        return redirect('userList');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $messages = Message::all();
        $user = User::findOrFail($id);
        return view('editUser', compact('user', 'messages'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Get the user by ID
        $user = User::find($id);

        // Validate the form data
        $data = $request->validate([
            'fullName' => 'required|string',
            'userName' => 'required|string',
            'email' => 'required|email',

        ]);


        $data['active'] = $request->has('active');
        //$data['password'] = Hash::make($request['password']);

        // Check if a new password is provided and update it
        if ($request->filled('password')) {
            $user->update(['password' => bcrypt($request->password)]);
        }


        User::where('id', $id)->update($data);

        return redirect('userList');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function messages()
    {
        return [
            'fullName.required' => 'Please enter your full name',
            'userName.required' => 'Please enter your user name',
            'email.required' => 'Please enter your email',
            'password.required' => 'Please enter your password',
        ];
    }
}

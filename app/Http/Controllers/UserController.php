<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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
        // return view('addUserForm');
        $users = User::get();
        return view('userList', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addUser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $messages = $this->messages();

        $data = $request->validate([
            'fullName' => 'required|string',
            'userName' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',


        ]);

        // Convert 'on' to 1, and null or absent to 0

        $data = $request->only($this->columns);
        $data['active'] = $request->has('active') ? 1 : 0;
        User::create($data);

        return "stored";
        //return redirect('userList');
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
        $user = User::findOrFail($id);
        return view('editUser', compact('user'));
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
        //
    }

    public function messages()
    {
        return [
            'fullName.required' => 'Please enter your full name',
            'userName.required' => 'Please enter your user name',
        ];
    }
}

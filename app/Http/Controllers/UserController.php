<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
        return view('adduserForm');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'fullName' => 'required|string',
            'userName' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
            'active' => 'boolean',
        ]);

        $data['active'] = isset($request['active']);
        //$data['published'] = isset($data['published']) ? true : false;

        User::create($data);
        return redirect('addUserForm');
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
        //
    }
}

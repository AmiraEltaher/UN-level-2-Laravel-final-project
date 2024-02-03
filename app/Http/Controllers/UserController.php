<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        // dd($request->all());
        $messages = $this->messages();

        $data = $request->validate([

            'fullName' => 'required|string',
            'userName' => 'required|string',
            'email' => 'required|email',
            'password' => 'required',

        ], $messages);


        $data = $request->only($this->columns);

        // Convert 'on' to 1, and null or absent to 0
        $data['active'] = $request->has('active') ? true : false;

        $data['password'] = Hash::make($request['password']);
        //$data['password'] = bcrypt($data['password']);

        User::create($data);
        return "stored";
        // return redirect('userList');
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
        // Get the user by ID
        $user = User::find($id);

        // Validate the form data
        $data = $request->validate([
            'fullName' => 'required|string',
            'userName' => 'required|string',
            'email' => 'required|email',
            'password' => 'sometimes|required|min:8|confirmed',
        ]);

        // Update other fields
        $data['active'] = $request->has('active');

        // Update the user's information
        $user->update($data);

        // Check if a new password is provided and update it
        if ($request->filled('password')) {
            $user->update(['password' => bcrypt($request->password)]);
        }

        return redirect('userList');
        /* $data = $request->only($this->columns);
        $data['active'] = isset($data['active']) ? true : false;


        User::where('id', $id)->update($data);
        return redirect('userList');*/
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

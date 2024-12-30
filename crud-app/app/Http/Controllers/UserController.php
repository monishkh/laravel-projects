<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    // Display a listing of users
    public function allUsers()
    {
        $users = User::all();
        return view('User.AllUser', ['users' => $users]);
        
    }

    public function create()
    {
        return view('User.CreateUser');
    }

    public function store(Request $request)
    {
        $data =  $request->validate(
            [
                'name' => 'required',
                'email' => 'required',
                'password' => 'required'
            ]
        );

        $newUser = User::create($data); 
        return redirect(route('User.AllUser'))->with('success', 'User created  successfully');
    }


    public function edit(User $user)
    {
        return view('User.UpdateUser', ['user' => $user] );
    }

    public function update(User $user, Request $request)
    {
        $data =  $request->validate(
            [
                'name' => 'required',
                'email' => 'required',
                'password' => 'required'
            ]
        );

        $user->update($data);

        return redirect(route('User.AllUser'))->with('success', 'user update successfully');
    }

    public function delete (User $user) 
    {
        $deletedUserName = $user->name; // Save the user's name before deleting
        $user->delete();
        return redirect(route('User.AllUser'))->with('success', "user '{$deletedUserName}' deleted successfully");

    }



}




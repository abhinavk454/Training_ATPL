<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function addDetails(Request $request)
    {
        // dd($request->all());
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->age = $request->age;
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('Y-m-d-H-i-s') . '-' . $file->getClientOriginalName();
            $file->move(public_path('assets/images'), $filename);
            $user->avatar_name = $filename;
            $user->avatar_path = public_path('public') . '/' . $filename;
        }
        $user->save();
        session()->flash('message', 'User added successfully');
        return redirect()->route('home', ['message' => 'User added successfully']);
    }
    public function viewDetails()
    {
        $users = User::all();
        // dd($users);
        return view('view', compact('users'));
    }
}

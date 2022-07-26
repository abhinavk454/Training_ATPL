<?php

namespace App\Http\Controllers;

use App\Models\AdminModel;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(Request $request)
    {
        $data = $request->all();
        $admin = AdminModel::where('email', $data['username'])->where('password', $data['password'])->first();
        // echo json_encode($admin);
        // die;
        if ($admin) {
            session()->put('admin', $admin);
            return redirect('/dashboard');
        } else {
            return redirect('/');
        }
    }
    public function register(Request $request)
    {
        $admin = AdminModel::where('email', $request->email)->first();
        if ($admin) {
            return redirect('/');
        } else {
            $admin = new AdminModel;
            $admin->name = $request->name;
            $admin->email = $request->email;
            $admin->password = $request->password;
            $admin->save();
            return redirect('/');
        }
    }
}

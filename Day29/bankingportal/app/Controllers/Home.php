<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('login');
    }
    public function dashboard()
    {
        return view('admin-dashboard');
    }
    public function login()
    {
        $request = \Config\Services::request();
        $userModel = new \App\Models\userModel();
        $email = $request->getVar('email');
        $password = $request->getVar('password');
        $user = $userModel->where('email', $email)->first();
        if ($user) {
            if ($password === $user['password']) {
                session()->set('user_id', $user['user_id']);
                session()->set('name', $user['name']);
                session()->set('email', $user['email']);
                return redirect()->to('/dashboard');
            } else {
                echo "<script> alert('Password is incorrect')</script>";
                return redirect()->to('/');
            }
        } else {
            echo "<script> alert('Email is incorrect')</script>";
            return redirect()->to('/');
        }
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}

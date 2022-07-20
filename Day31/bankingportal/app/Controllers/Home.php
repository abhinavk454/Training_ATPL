<?php

namespace App\Controllers;

use Faker\Factory;

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
    public function add_customer()
    {
        return view('add-customer');
    }
    public function add_customer_action()
    {
        $faker = Factory::create();
        $request = \Config\Services::request();
        $customerModel = new \App\Models\CustomerModel();
        $name = $request->getVar('name');
        $email = $request->getVar('email');
        $password = $faker->password(6, 20);
        $account_number = $faker->randomNumber(8);
        $balance = $request->getVar('balance');
        $customerModel->insert([
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'account_number' => $account_number,
            'balance' => $balance
        ]);
        return redirect()->to('/view-customer');
    }
    public function view_customer()
    {
        $customerModel = new \App\Models\CustomerModel();
        $customers = $customerModel->findAll();
        return view('view-customer', ['customers' => $customers]);
    }
    public function delete_customer($id)
    {
        $customerModel = new \App\Models\CustomerModel();
        $customerModel->delete($id);
        return redirect()->to('/view-customer');
    }
    public function user_login()
    {
        return view('user-login');
    }
    public function user_login_actions()
    {
        $request = \Config\Services::request();
        $userModel = new \App\Models\customerModel();
        $email = $request->getVar('email');
        $password = $request->getVar('password');
        $user = $userModel->where('email', $email)->first();
        if ($user) {
            if ($password === $user['password']) {
                session()->set('user_id', $user['user_id']);
                session()->set('name', $user['name']);
                session()->set('email', $user['email']);
                session()->set('account_number', $user['account_number']);
                session()->set('balance', $user['balance']);
                return redirect()->to('/user-dashboard');
            } else {
                echo "<script> alert('Password is incorrect')</script>";
                return redirect()->to('/user-login');
            }
        } else {
            echo "<script> alert('Email is incorrect')</script>";
            return redirect()->to('/user-login');
        }
    }
    public function user_dashboard()
    {
        return view('user-dashboard');
    }
    public function user_loan()
    {
        return view('user-loan');
    }
    public function handle_loan()
    {
        $request = \Config\Services::request();
        $loanModel = new \App\Models\loanModel();
        $user_id = session()->get('user_id');
        $amount = $request->getVar('amount');
        $interest = 7.25;
        $duration = $request->getVar('duration');
        $loanModel->insert([
            'user_id' => $user_id,
            'loan_amount' => $amount,
            'loan_interest' => $interest,
            'loan_duration' => $duration,
            'loan_status' => 'pending'
        ]);
        echo "<script> alert('Loan request sent')</script>";
        return redirect()->to('/user-dashboard');
    }
    public function user_loan_history()
    {
        $loanModel = new \App\Models\loanModel();
        $user_id = session()->get('user_id');
        $loans = $loanModel->where('user_id', $user_id)->findAll();
        return view('user-loan-history', ['loans' => $loans]);
    }
    public function user_logout()
    {
        session()->destroy();
        return redirect()->to('/user-login');
    }

    public function view_loan()
    {
        $loanModel = new \App\Models\loanModel();
        $loans = $loanModel->findAll();
        return view('view-loans', ['loans' => $loans]);
    }
    public function delete_loan($id)
    {
        $loanModel = new \App\Models\loanModel();
        $loanModel->delete($id);
        return redirect()->to('/view-loan');
    }
    public function approve_loan($id)
    {
        $loanModel = new \App\Models\loanModel();
        $loanModel->where('loan_id', $id)->set('loan_status', 'approved')->update();
        return redirect()->to('/view-loan');
    }
    public function reject_loan($id)
    {
        $loanModel = new \App\Models\loanModel();
        $loanModel->where('loan_id', $id)->set('loan_status', 'rejected')->update();
        return redirect()->to('/view-loan');
    }
    public function change_password()
    {
        return view('change-password');
    }
    public function change_password_action()
    {
        $request = \Config\Services::request();
        $userModel = new \App\Models\customerModel();
        $user_id = session()->get('user_id');
        $password = $request->getVar('password');
        $userModel->where('user_id', $user_id)->set('password', $password)->update();
        echo "<script> alert('Password changed')</script>";
        return redirect()->to('/user-dashboard');
    }
}

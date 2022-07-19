<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class EmailController extends BaseController
{
    public function index()
    {
        $customerModel = new \App\Models\CustomerModel();
        $customers = $customerModel->findAll();
        return view('email', ['customers' => $customers]);
    }
    public function mail_ji()
    {
        $inputs = $this->validate([
            'email' => 'required|valid_email',
            'subject' => 'required|min_length[5]',
            'message' => 'required|min_length[10]'
        ]);
        if (!$inputs) {
            return view('email', [
                'validation' => $this->validator
            ]);
        }
        $to = $this->request->getVar('email');
        $subject = $this->request->getVar('subject');
        $message = $this->request->getVar('message');
        $data = [
            'name' => 'John',
            'u_email' => $to,
            'message' => 'Hello, this is a test email.',
            'subject' => $subject,
            'u_link' => 'https://www.google.com/',
        ];
        // $message = "Please activate the account " . anchor('user/activate/' . $data['u_link'], 'Activate Now', '');
        $email = \Config\Services::email();
        $email->setFrom('agrawals@atpl.com', 'Confirm Your Id');
        $email->setTo($data['u_email']);
        $email->setSubject('Confirm Your Id');
        $email->setMessage($message);

        if ($email->send()) {
            $response = 'Email successfully sent';
        } else {
            $data = $email->printDebugger(['headers']);
            $response = 'Email send failed' . $data;
        }
        return redirect()->to(base_url('email'))->with('message', $response);
    }
}

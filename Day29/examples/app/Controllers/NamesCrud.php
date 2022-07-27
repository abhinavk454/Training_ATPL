<?php

namespace App\Controllers;

use App\Models\NameModel;
use CodeIgniter\Controller;

class NamesCrud extends Controller
{
    // show names list
    public function index()
    {
        $NameModel = new NameModel();
        $data['users'] = $NameModel->orderBy('id', 'DESC')->findAll();
        return view('namelist', $data);
    }

    // add name form
    public function create()
    {
        return view('addname');
    }

    // add data
    public function store()
    {
        $request = \Config\Services::request();
        $NameModel = new NameModel();
        $data = [
            'name' => $request->getVar('name'),
            'email'  => $request->getVar('email'),
        ];
        $NameModel->insert($data);
        return $this->response->redirect(site_url('/namelist'));
    }

    // show single name
    public function singleUser($id = null)
    {
        $NameModel = new NameModel();
        $data['user_obj'] = $NameModel->where('id', $id)->first();
        return view('editnames', $data);
    }

    // update name data
    public function update()
    {
        $request = \Config\Services::request();
        $NameModel = new NameModel();
        $id = $request->getVar('id');
        $data = [
            'name' => $request->getVar('name'),
            'email'  => $request->getVar('email'),
        ];
        $NameModel->update($id, $data);
        return $this->response->redirect(site_url('/namelist'));
    }

    // delete name
    public function delete($id = null)
    {
        $NameModel = new NameModel();
        $data['user'] = $NameModel->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/namelist'));
    }
}

<?php

namespace App\Controllers;

use App\Models\AdminModel;
use CodeIgniter\Controller;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AdminController extends BaseController
{
    public function index()
    {
        $model = new AdminModel();
        $data['admins'] = $model->findAll();
        return view('admin/index', $data);
    }

    public function create()
    {
        return view('admin/create');
    }

    public function store()
    {
        $model = new AdminModel();
        $model->save([
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
        ]);
        return redirect()->to('/admin');
    }

    public function edit($id)
    {
        $model = new AdminModel();
        $data['admin'] = $model->find($id);
        return view('admin/edit', $data);
    }

    public function update($id)
    {
        $model = new AdminModel();
        $model->update($id, [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
        ]);
        return redirect()->to('/admin');
    }

    public function delete($id)
    {
        $model = new AdminModel();
        $model->delete($id);
        return redirect()->to('/admin');
    }
}

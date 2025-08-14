<?php namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Register extends Controller
{
    public function index()
    {
        return view('auth/register');
    }

    public function create()
    {
        $session = session();
        $validation = \Config\Services::validation();

        $rules = [
            'username'      => 'required|min_length[3]|max_length[100]|is_unique[users.username]',
            'password'      => 'required|min_length[6]',
            'pass_confirm'  => 'required|matches[password]'
        ];

        if (! $this->validate($rules)) {
            return view('auth/register', [
                'validation' => $this->validator
            ]);
        }

        $userModel = new UserModel();
        $userModel->insert([
            'username' => $this->request->getPost('username'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
        ]);

        $session->setFlashdata('success', 'Registration successful! Please login.');
        return redirect()->to('/login');
    }
}
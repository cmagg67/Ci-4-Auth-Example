<?php namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Login extends Controller
{
    public function index()
    {
        return view('auth/login');
    }

    public function attemptLogin()
    {
        $session = session();
        $request = service('request');
        $username = $request->getPost('username');
        $password = $request->getPost('password');

        $userModel = new UserModel();
        $user = $userModel->where('username', $username)->first();

        if ($user && password_verify($password, $user['password'])) {
            $session->set('user_id', $user['id']);
            $session->set('username', $user['username']);
            return redirect()->to('/home');
        } else {
            $session->setFlashdata('error', 'Invalid username or password.');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
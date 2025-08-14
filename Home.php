<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Home extends Controller
{
    public function index()
    {
        $session = session();
        if (!$session->get('user_id')) {
            return redirect()->to('/login');
        }
        // Pass username to view
        $data['username'] = $session->get('username');
        return view('dashboard/index', $data);
    }
}
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
        // If logged in, show home view
        return view('dashboard/index');
    }
}

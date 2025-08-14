<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Dashboard extends Controller
{
    public function index()
    {
        // Check if user is logged in
        $session = session();
        if (!$session->get('user_id')) {
            return redirect()->to('/login');
        }

        // Pass username to view if you stored it in session
        $data['username'] = $session->get('username');
        return view('dashboard/index', $data);
    }
}
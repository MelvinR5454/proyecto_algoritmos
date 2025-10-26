<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class HomeController extends Controller
{
    public function dashboard()
    {
        // Verificar si está logueado
        if (!session('logged_in')) {
            return redirect()->to('/login');
        }

        $data = [
            'title' => 'Dashboard',
            'user' => [
                'name' => session('name'),
                'email' => session('email')
            ]
        ];

        return view('dashboard', $data);
    }

    public function profile()
    {
        if (!session('logged_in')) {
            return redirect()->to('/login');
        }

        return view('profile/view');
    }
}
<?php
namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class AuthController extends Controller
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        return view('welcome');
    }

    public function login()
    {
        // Si ya está logueado, redirigir al dashboard
        if (session('logged_in')) {
            return redirect()->to('/dashboard');
        }

        if ($this->request->getMethod() === 'POST') {
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            $user = $this->userModel->where('email', $email)->first();

            if ($user && password_verify($password, $user['password'])) {
                $session = session();
                $session->set([
                    'id' => $user['id'],
                    'name' => $user['name'],
                    'email' => $user['email'],
                    'is_admin' => $user['is_admin'],
                    'logged_in' => true
                ]);

                return redirect()->to('/dashboard');
            } else {
                return redirect()->back()->with('error', 'Email o contraseña incorrectos');
            }
        }

        return view('auth/login');
    }

    public function register()
    {
        if (session('logged_in')) {
            return redirect()->to('/dashboard');
        }

        if ($this->request->getMethod() === 'POST') {
            $data = [
                'name' => $this->request->getPost('name'),
                'email' => $this->request->getPost('email'),
                'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                'active' => true,
                'is_admin' => false
            ];

            if ($this->userModel->save($data)) {
                return redirect()->to('/login')->with('success', 'Registro exitoso. Ahora puedes iniciar sesión.');
            } else {
                return redirect()->back()->with('errors', $this->userModel->errors());
            }
        }

        return view('auth/register');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
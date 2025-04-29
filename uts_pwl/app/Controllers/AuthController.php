<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RedirectResponse;

class AuthController extends BaseController
{
    private $users = [
        [
            'id' => 1,
            'username' => 'admin',
            'password' => 'admin123', 
            'role' => 'admin'
        ],
        [
            'id' => 2,
            'username' => 'user',
            'password' => 'user123', 
            'role' => 'user'
        ]
    ];

    public function __construct()
    {

        foreach ($this->users as &$user) {
            $user['password'] = password_hash($user['username'] . '123', PASSWORD_DEFAULT); // password = username+123
        }
    }

    public function login()
    {
        return view('auth/login');
    }

    public function loginProcess()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        foreach ($this->users as $user) {
            if ($user['username'] === $username && password_verify($password, $user['password'])) {
                session()->set([
                    'id' => $user['id'],
                    'username' => $user['username'],
                    'role' => $user['role'],
                    'isLoggedIn' => true
                ]);

                if ($user['role'] === 'admin') {
                    return redirect()->to('/admin');
                } else {
                    return redirect()->to('/user');
                }
            }
        }

        return redirect()->back()->with('error', 'Login gagal. Cek username/password.');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }

    public function listUser()
    {
        $users = $this->users; 

        return view('auth/UserList', [
            'users' => $users
        ]);
    }

}


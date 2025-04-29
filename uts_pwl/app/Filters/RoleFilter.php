<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class RoleFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $role = $arguments[0] ?? ''; // Mendapatkan role yang dibutuhkan dari parameter filter

        // Periksa jika session 'role' tidak ada atau tidak sesuai dengan role yang dibutuhkan
        if (!session()->has('role') || session()->get('role') !== $role) {
            // Jika role admin, arahkan ke halaman admin
            if (session()->get('role') === 'admin') {
                return redirect()->to('/admin');
            }
            // Jika role user, arahkan ke halaman user
            elseif (session()->get('role') === 'user') {
                return redirect()->to('/user');
            }
            // Jika tidak ada role atau tidak sesuai, arahkan ke halaman login
            else {
                return redirect()->to('/');
            }
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {

    }
}

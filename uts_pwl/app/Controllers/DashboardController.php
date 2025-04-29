<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function admin()
    {
        $data = [
            'title' => 'Admin Dashboard',
            'user' => session()->get('username')
        ];

        return view('dashboard/admin', $data);
    }

    public function user()
    {
        $data = [
            'title' => 'User Dashboard',
            'user' => session()->get('username')
        ];

        return view('dashboard/user', $data);
    }
}

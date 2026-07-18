<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function login()
    {
        if (session()->get('isLoggedIn') && session()->get('role') === 'admin') {
            return redirect()->to(base_url('admin/dashboard'));
        }
        return view('admin/login');
    }

    public function postLogin()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $db = \Config\Database::connect();
        $user = $db->table('users')->where('username', $username)->get()->getRow();

        if ($user && password_verify($password, $user->password)) {
            $sessionData = [
                'userId'     => $user->id,
                'username'   => $user->username,
                'email'      => $user->email,
                'role'       => $user->role,
                'isLoggedIn' => true,
            ];
            session()->set($sessionData);
            return redirect()->to(base_url('admin/dashboard'))->with('success', 'Selamat datang kembali, Admin!');
        }

        return redirect()->back()->with('error', 'Username atau password salah.');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('admin/login'))->with('success', 'Berhasil logout.');
    }
}

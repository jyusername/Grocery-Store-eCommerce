<?php

namespace App\Controllers;
 

use App\Models\UserModel;
use CodeIgniter\Controller;

class Auth extends Controller
{
    public function login()
    {
        return view('auth/login');
    }

    public function loginSubmit()
    {
        $model = new UserModel();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Fetch user from the database
        $data = $model->getUser($username);

        if ($data) {
            // Check if the plain text password matches
            if ($password === $data['password']) {
                return redirect()->to('/products'); 
            } else {
                return redirect()->to('/login')->with('msg', 'Password is incorrect');
            }
        } else {
            return redirect()->to('/login')->with('msg', 'User not found');
        }
    }

    public function logout()
    {
        return redirect()->to('/login');
    }
}

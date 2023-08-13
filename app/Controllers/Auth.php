<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use Codeigniter\Session\Session;

class Auth extends BaseController
{
    public $session;
    public function __construct()
    {
        helper("form");
        $this->session = session();
    }
    public function index()
    {
    }
    public function login()
    {
        $data = [
            'session' => $this->session,
        ];
        helper("request");
        if (!$this->request->is('post')) {
            return view('login', $data);
        }

        $rules = [
            'email' => 'required|valid_email',
            'password' => 'required|min_length[5]',
        ];

        if (!$this->validate($rules)) {
            return view('login', $data);
        }

        $userModel = model('UserModel');
        $email = $this->request->getPost('email');
        $pass = $this->request->getPost("password");
        $user = $userModel->where('email', $email)->first();
        // dd($user);
        if ($user) {
           
            $newdata = [
                'ss_id' => $user['id'],
                'ss_username'  => $user['name'],
                'ss_email'     => $user['email'],
                'ss_logged_in' => true,
            ];
            $this->session->set($newdata);
            return redirect()->to("/");

            // dd($newdata);
        }else{
            echo "Error";
        }

        // if ($user) {
        //     if (password_verify($pass, $user['password'])) {
        //         $newdata = [
        //             'ss_id' => $user['id'],
        //             'ss_username'  => $user['name'],
        //             'ss_email'     => $user['email'],
        //             'ss_logged_in' => true,
        //         ];

        //         $this->session->set($newdata);

        //         // Debugging statements
        //         var_dump($this->session->get()); // Check session data
        //         echo 'Logged in successfully';

        //         return redirect()->to("/"); // Redirect to home page
        //     }
        // }

        // // Debugging statement
        // echo 'Invalid email or password';

        // return view('login', $data);
    }




    public function register()
    {
        $data = [
            'session' => $this->session,
        ];
        helper("request");
        if (!$this->request->is('post')) {
            return view('registration', $data);
        }

        $rules = [
            'name' => 'required|alpha',
            'email' => 'required|valid_email',
            'password' => 'required|min_length[5]',
            'password2' => 'required|min_length[5]|matches[password]',
        ];

        if (!$this->validate($rules)) {
            $this->session->setFlashdata('type', 'danger');
            $this->session->setFlashdata('message', 'Please Check The form');
            return view('registration', $data);
        }

        $user = new UserModel();
        $pass = $this->request->getPost('password') ?? '';
        $data = [
            'name'  => $this->request->getPost('name'),
            'email'     => $this->request->getPost('email'),
            'phone'     => $this->request->getPost('phone'),
            'password' => password_hash($pass, PASSWORD_DEFAULT),
        ];
        if ($user->insert($data)) {
            $this->session->setFlashdata('type', 'success');
            $this->session->setFlashdata('message', 'Registration Complete, please login to continue');
            return redirect()->to("login");
        } else {
            $this->session->setFlashdata('type', 'danger');
            $this->session->setFlashdata('message', 'Something went wrong. Please try again');
            return redirect()->to("registration");
        }
    }

    public function logout()
    {
        $session_items = ['username', 'email', 'logged_in'];
        $this->session->remove($session_items);
        $this->session->destroy();
        return redirect()->to("login");
    }
}

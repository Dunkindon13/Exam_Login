<?php

class Pages extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        $data = [
            'title' => 'Login Form',
        ];

        $this->view('pages/index', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Us'
        ];

        $this->view('pages/about', $data);
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'email' => $_POST['email'],
                'password' => $_POST['password'],
                'email_error' => '',
                'pass_error' => '',
            ];

            if (empty($data['email'])) {
                $data['email_error'] = 'Please enter an email';
            }

            if (empty($data['password'])) {
                $data['pass_error'] = 'Please enter a password';
            }
        }
    }

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'password' => $_POST['password'],
                'confirm_password' => $_POST['confirm_password'],
                'email_error' => '',
                'pass_error' => '',
            ];

            if (empty($data['name'])) {
                $data['name_error'] = 'Please enter a name';
            }

            if (empty($data['email'])) {
                $data['email_error'] = 'Please enter an email';
            }

            if (empty($data['password'])) {
                $data['pass_error'] = 'Please enter a password';
            }

            if (empty($data['confirm_password'])) {
                $data['pass_confirm_error'] = 'Please match your password';
            }
        }
    }
}
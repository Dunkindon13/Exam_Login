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

        $this->view('user/createAccount', $data);
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
                'pass_error' => ''

            ];

            if (empty($data['email'])) {
                $data['email_error'] = 'Please enter an email';
            }

            if (empty($data['password'])) {
                $data['pass_error'] = 'Please enter a password';
            }
        }
    }

    public function validateLogin(){

        // Get the values from the form
        // Access the model
        if(isset($_POST["submit"])){

            $username=$_POST["username"];
            $password=$_POST["password"];

        }
        $loginModel=$this->model("Login");
        $loginSuccess=$loginModel->validateLoginCredentials($username,$password);
        if(!$loginSuccess){
            $this->view("pages/invalidLogin");
        }
        else{
            $this->view("pages/successLogin");
        }

    }

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'username' => $_POST['username'],
                'email' => $_POST['email'],
                'password' => $_POST['password'],
                'confirm_password' => $_POST['confirm_password'],
                'age' => $_POST['age'],
                'email_error' => '',
                'pass_error' => '',
                'age-error'
            ];

            if (empty($data['username'])) {
                $data['username_error'] = 'Please enter a username';
            }

            if (empty($data['email'])) {
                $data['email_error'] = 'Please enter an email';
            }

            if (empty($data['password'] || $data['password'].length<8)) {
                $data['pass_error'] = 'Please enter a password of at least 8 characters';
            }

            if (empty($data['confirm_password'])) {
                $data['pass_confirm_error'] = 'Please match your password';
            }

            if (empty($data['age'] || $data['age']<1)) {
                $data['age_error'] = 'Please enter an age above zero';
            }
        }
    }
}
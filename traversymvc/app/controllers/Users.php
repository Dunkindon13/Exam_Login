<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019-04-07
 * Time: 10:13 AM
 */

class Users extends Controller
{
    public function createAccount()
    {

        if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest') {

        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            echo "This is a post request, without AJAX";
            if (isset($_POST["submit"])) {
                //Check they are set later
                $username = $_POST["username"];
                $password = $_POST["password"];
                $email = $_POST["email"];
                $age = $_POST["age"];

                //Referencing the model, making sure all variables are included
                $model = $this->model("AccountModel");
                $success = $model->createAccount($username, $password, $email, $age);
                if ($success) {
                    echo "Successfully Inserted";
                } else {
                    echo "Insert Failed";
                }
            }
        } else {
            return $this->view("Users/createAccount");
        }
    }

    public function createAccountAjax()
    {
        if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest') {
            echo "In Ajax Call";
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            echo "Post Request Ajax";
            if (isset($_POST["submit"])) {
                //check they are set later
                $username = $_POST["username"];
                $password = $_POST["password"];
                $email = $_POST["email"];
                $age = $_POST["age"];

                //Referencing the model, making sure all variables are included
                $model = $this->model("AccountModel");
                $success = $model->createAccount($username, $password, $email, $age);
                if ($success) {
                    echo "Successfully Inserted";
                } else {
                    echo "Insert Failed";
                }
            }
        } else {
            return $this->view("Users/createAccountAjax");
        }
    }

    public function index()
    {

    }
}
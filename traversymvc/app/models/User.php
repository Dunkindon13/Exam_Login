<?php
class User {
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    // Register the user
    public function register($data){
        $this->db->query('INSERT INTO users (name, email, password, age) VALUES(:name, :email, :password, :age)');

        // Bind the values together
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':age', $data['age']);

        // Execute
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }

    // Check to see if User already has an account
    public function checkUserExists($username)
    {
        $query = "select count(*) from credentials where username=:username";
        $this->db->query($query);
        $this->db->bind(":username", $username, PDO::PARAM_STR);
        $this->db->execute();
        $rowCount = $this->db->fetchColumn();

        if ($rowCount == 0) {
            //"invalid login"
            return false;
        } else {
            return true;
        }
    }

    public function createAccount($username, $password, $email, $age)
    {
        $alreadyExists = $this->checkUserExists($username);
        if ($alreadyExists) {
            return false;
        }
        $query = "insert into credentials(username, password, email, age) values(:username,:password, :email, :age)";
        $this->db->query($query);
        $this->db->bind(":username", $username);
        $this->db->bind(":password", $password);
        $this->db->bind(":email", $email);
        $this->db->bind(":age", $age);


        $success = $this->db->execute();
        return $success;
    }

    // Login the User
    public function login($email, $password){
        $this->db->query('SELECT * FROM users WHERE email = :email');
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        $hashed_password = $row->password;
        if(password_verify($password, $hashed_password)){
            return $row;
        } else {
            return false;
        }
    }

    // Find user by email
    public function findUserByEmail($email){
        $this->db->query('SELECT * FROM users WHERE email = :email');
        // Bind value
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        // Check row
        if($this->db->rowCount() > 0){
            return true;
        } else {
            return false;
        }
    }
}
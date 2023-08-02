<?php

class User {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function signUp($username, $email, $password) {
        // Implement user registration and insert user into the 'users' table
    }

    public function login($username, $password) {
        // Implement user login and return user data if successful
    }

    public function isLoggedIn() {
        // Check if user is logged in
    }

    public function logout() {
        // Logout the user
    }
}
?>

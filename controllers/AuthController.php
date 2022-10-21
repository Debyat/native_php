<?php

namespace Controllers;

session_start();
use Models\Admin;

class AuthController {

    public static function index()
    {
        echo("<script> location.replace('views/home.php');</script>");
    }

    public static function login()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
       
		$fetch = Admin::auth($username, $password);

        if ($fetch > 0) {
            $_SESSION['admin_id'] = $fetch['admin_id'];
            echo("<script> location.replace('home.php')</script>");
        } else {
            echo "<script>alert('Invalid username or password')</script>";
            AuthController::index();
        }
    }

    public static function logout()
    {
        unset($_SESSION['admin_id']);

        header('location:view/home.php');
    }

}
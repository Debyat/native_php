<?php


namespace Middleware;

class Auth {
    
    public static function checkUser()
    {
        session_start();
        if (!ISSET($_SESSION['admin_id'])) {
            header('location:view/home.php');
        }
    }
}

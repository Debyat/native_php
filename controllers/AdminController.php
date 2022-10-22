<?php

namespace Controllers;

use Models\Admin;
use Core\DB;

class AdminController{

    public static function index()
    {
        session_start();
        $date = date("Y", strtotime("+ 8 HOURS"));
        $db = new DB();

        $sections = [
            'maternity',
            'malnourished', 
            'tubercolusis', 
            'teenage_preg', 
            'hypertension', 
            'diabetic', 
            'pwd'
        ];
        
        foreach ($sections as $value) {
            $holder = $db->connect->query("SELECT COUNT(*) as total FROM `$value` WHERE `year` = '$date' GROUP BY `patient_id`");
            $data[$value] = $holder->fetch_array();
        }

        return $data;
    }

    public static function form()
    {
        echo("<script> location.replace('views/admin/add_admin.php');</script>");
    }

    public static function add()
    {
        $username = $_POST['username'];

        $count = Admin::where('username', $username);
        if ($count > 0) {
            echo("<script> alert('Username is already exist!');</script>");
            echo("<script> location.replace('views/admin/add_admin.php');</script>");
        } else {
            $data = [
                'username'  => $_POST['username'],
                'password'  => $_POST['password'],
                'firstname' => $_POST['firstname'],
                'middlename'=> $_POST['middlename'],
                'lastname'  => $_POST['lastname'],
            ];
            $admin = Admin::add($data);
            if ($admin) {
                echo("<script> location.replace('views/home.php');</script>");
            } else {
                AdminController::form();
            }
        }
    }

    public static function update()
    {
        
    }

}
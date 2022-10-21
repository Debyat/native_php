<?php

namespace Models;

use Core\DB;

class Admin{
    
    /**
     * template parameter
     * $array = [
     *       'username' => 'username_data',
     *       'password' => 'password_data',
     *       'firstname' => 'firstname_data',
     *       'middlename' => 'middlename_data',
     *       'lastname' => 'lastname_data',
     *   ];
     * 
     * @param Array $values
     * Adding admin
     */
    public static function add($values)
    {
        $db = new DB();

        foreach ($values as $key => $value) {
            $DATA[$key] = $value;
        }

        $query = "INSERT INTO `admin` 
            VALUES (
                NULL, 
                '".$DATA['username']."',
                '".$DATA['password']."', 
                '".$DATA['firstname']."', 
                '".$DATA['middlename']."', 
                '".$DATA['lastname']."'
            )"; 

        $response = $db->connect->query($query);

        return $response;
    }

    /**
     * template parameter
     * $array = [
     *       'username' => 'username_data',
     *       'password' => 'password_data',
     *       'firstname' => 'firstname_data',
     *       'middlename' => 'middlename_data',
     *       'lastname' => 'lastname_data',
     *   ];
     * 
     * @param Array $values
     * @param Admin $id
     * update admin
     */
    public static function update($values, $id)
    {
        $db = new DB();
        foreach ($values as $key => $value) {
            $DATA[$key] = $value;
        }

        $query = "UPDATE `admin` SET 
            `username`  = '".$DATA['username']."',
            `password`  = '".$DATA['password']."',
            `firstname` = '".$DATA['firstname']."',
            `middlename`= '".$DATA['middlename']."',
            `lastname`  = '".$DATA['lastname']."'
             WHERE `admin_id` = $id";

        $response = $db->connect->query($query);
        
        return $response;
    }
    
    /**
     * Get all admin
     */
    public static function get()
    {
        $db = new DB();
        $query = "SELECT * FROM `admin`";
        $response = $db->connect->query($query);

        return $response->fetch_array();
    }

    /**
     * Get one admin
     */
    public static function first()
    {
        $db = new DB();
        $query = "SELECT * FROM `admin` LIMIT 1";
        $response = $db->connect->query($query);

        return $response->fetch_array();
    }

    /**
     * @param String $col
     * @param String/Int $val
     * getting admin with condition
     */
    public static function where($col, $val)
    {
        $db = new DB();
        $query = "SELECT * FROM `admin` WHERE $col = $val";
        $response = $db->connect->query($query);

        return $response->fetch_array();
    }

    /**
     * @param String $query
     * select raw
     */
    public static function selectRaw($query)
    {
        $db = new DB();
        $response = $db->connect->query($query);

        return $response->fetch_array();
    }
    
    public static function auth($username, $password)
    {
        $db = new DB();

        $query = "SELECT *FROM `admin` WHERE `username` = '$username' && `password` = '$password'";

        $response = $db->connect->query($query);

        return $response->fetch_array();
    }
}
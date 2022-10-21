<?php

namespace Core;

use mysqli;

class DB {
    public $connect;

    function __construct()
    {
        $host = 'localhost';
        $username = 'root';
        $pass = '';
        $db_name = 'brgy_baod_record';

        $this->connect = new mysqli($host, $username, $pass, $db_name) or die(mysqli_error());
    }
}
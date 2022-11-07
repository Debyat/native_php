<?php

namespace Services;

use Core\DB;
use Support\Builder;

class CreateBuilder implements Builder
{
    /**
     * use connection to database
     */
    use DB;

    /**
     * var string
     */
    private $model;

    /**
     * Setting table name
     * 
     * @param string $model
     */
    public function setModel($model): void
    {
        $this->model = $model;
    }

    /**
     * Getting all data
     * 
     */
    public function get()
    {
        $query = "SELECT * FROM `$this->model`";
        
        return $this->query($query);
    }

    /**
     * Getting all data
     * 
     */
    public function all()
    {
        $query = "SELECT * FROM `$this->model`";
        
        return $this->query($query);
    }

    /**
     * Getting specific data
     * 
     */
    public function first()
    {
        $query = "SELECT * FROM `$this->model` LIMIT 1";

        return $this->query($query);
    }
    
    /**
     * Adding new data
     * 
     * @param array $values
     */
    public function add($values)
    {
        foreach ($values as $key => $value) {
            $DATA[$key] = $value;
        }

        $query = "INSERT INTO `$this->model` 
            VALUES (
                NULL, 
                '".$DATA['username']."',
                '".$DATA['password']."', 
                '".$DATA['firstname']."', 
                '".$DATA['middlename']."', 
                '".$DATA['lastname']."'
            )"; 
        
        return $this->query($query);
    }

    /**
     * Updating specific data
     * 
     * @param array $values
     * @param int $id
     */
    public function update($values, $id)
    {
        foreach ($values as $key => $value) {
            $DATA[$key] = $value;
        }

        $query = "UPDATE `$this->model` SET 
            `username`  = '".$DATA['username']."',
            `password`  = '".$DATA['password']."',
            `firstname` = '".$DATA['firstname']."',
            `middlename`= '".$DATA['middlename']."',
            `lastname`  = '".$DATA['lastname']."'
             WHERE `admin_id` = $id";

        return $this->query($query);
    }
}
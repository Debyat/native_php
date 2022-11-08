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
     * var string
     */
    private $query;

    public function __construct()
    {
        $this->setQuery();
    }

    /**
     * Setting default query
     * 
     */
    public function setQuery()
    {
        return $this->query = "SELECT * FROM `$this->model`";
    }

    /**
     * Setting table name
     * 
     * @param string $model
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this->model;
    }

    /**
     * Setting table name
     * 
     * @param string $model
     */
    public function where($col, $val)
    {
        $this->query = $this->query."WHERE `$col` = `$val`";

        return $this->query;
    }

    /**
     * Setting table name
     * 
     * @param string $model
     */
    public function orderBy($col)
    {
        $this->query = $this->query."ORDER BY `$col`";

        return $this->query($this->query);
    }

    /**
     * Getting all data
     * 
     */
    public function get()
    {
        return $this->query($this->query);
    }

    /**
     * Getting all data
     * 
     */
    public function all()
    {
        return $this->query($this->query);
    }

    /**
     * Getting specific data
     * 
     */
    public function first()
    {
        $this->query = $this->query."LIMIT 1";

        return $this->query($this->query);
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
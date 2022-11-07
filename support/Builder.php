<?php 

namespace Support;

interface Builder {

    /**
     * Set table name
     * 
     * @param String $model
     */
    public function setModel($model) : void;

    /**
     * Get all data
     */
    public function get();

    /**
     * Get all data
     */
    public function all();

    /**
     * Get only 1 data
     */
    public function first();

    /**
     * Adding new data
     * 
     * @param array $values
     */
    public function add($values);
}
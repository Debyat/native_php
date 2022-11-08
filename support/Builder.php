<?php 

namespace Support;

interface Builder {

    /**
     * Set table name
     * 
     * @param String $model
     */
    public function setModel($model);

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
     * Condition query
     */
    public function where($val, $col);

    /**
     * Condition query
     */
    public function orderBy($col);

    /**
     * Adding new data
     * 
     * @param array $values
     */
    public function add($values);

    /**
     * Update specific data
     * 
     * @param array $values
     */
    public function update($values, $id);
}
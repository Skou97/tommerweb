<?php
class Model {
    protected $_db, $_table, $_modelName, $_softDelete = false, $_columnName = [];
    public $id;
    
    public function __construct($table) {
        $this->_db = DB::getInstance();
        $this->_table = $table;
        $this->setTableColumns();
        $this->_modelName = str_replace(' ', '', ucwords(str_replace('_', ' ', $this->_table)));
    }
    
    protected function _setTableColumns() {
        $columns = $this->get_columns();
        foreach($columns as $column) {
            $this->_columnNames[] = $column->Field;
            $this->{$columnName} = null;
        }
    }
    // get_columns tager og reatuner get_columns fra DB
    public function get_columns() {
        return $this->_db->get_columns($this->_table);
    }
    // find er en funktionen som finder ting fra den udvalte tabel der er sat og det gør den med hjælp fra fx.
    // ($params = [******** WHERE id = 5])
    public function find($params = []) {
        $results = [];
        //Find resultat af input($params = []) fra funktionen
        $resultsQuery = $this->_db->find($this->_table, $params);
        foreach($resultsQuery as $result) {
            $obj = new $this->_modelName($this->_table);
            $obj->populateObjData($result);
            $results[] = $obj;
        }
        return $results;
    }
    
    public function findFirst($params = []) {
        $resultQuery = $this->_db->findFirst($this->_table, $params);
        $result = new $this->_modelName($this->_table);
        $result->populateObjData($resultQuery);
        return $result;
    }
    
    public function findById($id) {
        return $this->findFirst(['conditions'=>"id = ?", 'bind' => [$id]]);
    }
    
    public function insert($fields) {
        if(empty($fields)) return false;
        return $this->_db->insert($this->_table, $fields);
    }
    
    public function update($id, $fields) {
        if(empty($fields) || $id == '') return false;
        return $this->_db->update($this->_table, $id, $fields);
    }
    
    public function delete($id) {
        if($id == '' && $this->id == '') return false;
        $id = ($id == '') ? $this->id : $id;
        if($this->_softDelete) {
            return $this->_db->update($this->_table, $id, ['deleted' => 1]);
        }
        return $this->_db->delete($this->_table, $id);
    }
    
    public function query($sql, $bind=[]) {
        return $this->_db->query($sql, $bind);
    }

    public function data() {
        $data = new stdClass();
        foreach($this->columnNames as $column) {
            $data->column = $this->column;
        }
        return $data;
    }
    
    protected function populateObjData($result) {
        foreach($result as $key => $val) {
            $this->$key = $val;
        }
    }
    
    
    
}

<?php

class DB {
    private static $_instance = null;
    private $_pdo, $_query, $_error = false, $_result, $_count = 0, $_lastInsertID = null;
    
    private function __construct() {
        try {
            $this->_pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.'', DB_USER, DB_PASSWORD);
            $this->_pdo->exec("SET NAMES 'utf8';");
        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }
    // getInstance er en static function som skal køre´s for at kunne forbinde til databasen
    public static function getInstance() {
        if(!isset(self::$_instance)) {
            self::$_instance = new DB();
        }
        return self::$_instance;
    }
    // query svar på alle request til min database den kan tage en function som fx insert eller bare en sql kode
    public function query($sql, $params = []) {
        $this->_error = false;
        if($this->_query = $this->_pdo->prepare($sql)) {
            $x = 1;
            if(count($params)) {
                foreach($params as $param) {
                    $this->_query->bindValue($x, $param);
                    $x++;
                }
            }
            if($this->_query->execute()) {
                $this->_result = $this->_query->fetchALL(PDO::FETCH_OBJ);
                $this->_count = $this->_query->rowCount();
                $this->_lastInsertID = $this->_pdo->lastInsertId();
            } else {
                $this->_error = true; 
            }
        }
        return $this;
    }
    // Mark Husk at beskrive denne here funktionen!!!!
    protected function _read($table, $params=[]) {
        $conditionString = '';
        $bind = [];
        $order = '';
        $limit = '';
        
        // conditions
        if(isset($params['conditions'])) {
            if(is_array($params['conditions'])) {
                foreach($params['conditions'] as $conditions) {
                    $conditionString .= ' ' . $conditions . ' AND';
                }
                $conditionString = trim($conditionString);
                $conditionString = rtrim($conditionString, ' AND');
            } else {
                $conditionString = $params['conditions'];
            }
            if($conditionString != '') {
                $conditionString = ' WHERE ' . $conditionString;   
            }
        }
        // bind
        if(array_key_exists('bind', $params)) {
            $bind = $params['bind'];
        }
        
        // order
        if(array_key_exists('order', $params)) {
            $order = ' ORDER BY ' . $params['order'];
        }
        
        // limit
        if(array_key_exists('limit', $params)) {
            $limit = ' LIMIT ' . $params['limit'];
        }
        $sql = "SELECT * FROM {$table}{$conditionString}{$order}{$limit}";
        if($this->query($sql, $bind)) {
            if(!count($this->_result)) return false;
            return true;
        }
        return false;
    }
    
    public function find($table, $params=[]) {
        if($this->_read($table, $params)) {
            return $this->results();
        }
        return false;
    }
    
    public function findFirst($table, $params=[]) {
        if($this->_read($table, $params)) {
            return $this->first();
        }
        return false;
    }
    // insert indsetter data til en udvalt tabel
    public function insert($table, $fields = [], $safe = true) {
        $fieldString = '';
        $valueString = '';
        $values = [];
        
        foreach($fields as $field => $value) {
            $fieldString .= '`' . $field . '`,';
            $valueString .= '?,';
            $values[] = $value;
        }
        $fieldString = rtrim($fieldString, ',');
        $valueString = rtrim($valueString, ',');
        $sql = "INSERT INTO {$table} ({$fieldString}) VALUES ({$valueString})";
        if(!$this->query($sql, $values)->error()) {
            return true;
        }
        return false;
    }
    // update updater en tabel colem
    public function update($table, $id, $fields = []) {
        $fieldString = '';
        $values = [];
        foreach($fields as $field => $value) {
            $fieldString .= ' ' . $field . ' = ?,';
            $values[] = $value;
        }
        $fieldString = trim($fieldString);
        $fieldString = rtrim($fieldString, ',');
        $sql = "UPDATE {$table} set {$fieldString} WHERE id = {$id}";
        if(!$this->query($sql, $values)->error()) {
            return true;
        }
        return false;
    }
    // delete vil slette en colem fra en udvalt tabel med et id
    public function delete($table, $id) {
        $sql = "DELETE FROM {$table} where id = {$id}";
        if($this->query($sql)->error()) {
            return true;
        }
        return false;
    }
    // results giver mig mit result fra min SQL query
    public function results() {
        return $this->_result;
    }
    // first giver mig det første svar fra min query
    public function first() {
        return (!empty($this->_result)) ? $this->_result[0] : [] ;
    }
    // count giver mig svar på hvor mange svar jeg får på en query
    public function count() {
        return $this->_count;
    }
    // lastID giver mig det siste id der var indsat
    public function lastID() {
        return $this->_lastInsertID;
    }
    // get_columns giver mig en liste over alle columns i den udvalte tabel
    public function get_columns($table) {
        return $this->query("SHOW COLUMNS FROM {$table}")->results();
    }
    // error checker om der skulle opstå en fejl under vejs og SKAL køre´s før query function!
    public function error() {
        return $this->_error;
    }
}
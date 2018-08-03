<?php

class Database {


    private static $_instance;
    protected $_connect;
    protected $_sql;

    public static function getInstance() {
        if(!self::$_instance) { // If no instance then make one
            self::$_instance = new self();
        }
        return self::$_instance;
    }


    public function __construct()
    {

        $servername = "127.0.0.1";
        $username = "root";
        $password = "";
        $dbName = "blog";
        $this->_connect =  mysqli_connect($servername, $username, $password, $dbName);

    }

    public function getConnection() {
        return $this->_connect;
    }

    public function query($sql) {
        if($this->_connect->query($sql) == false) {
            return $this->_connect->error;
        }
    }

    public function select($sql) {
        $result = $this->_connect->query($sql);
        
        $final = array();
        while($row = $result->fetch_assoc()){
            $final[] = $row;
        }
        return $final;
    }



}
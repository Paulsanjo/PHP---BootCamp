<?php

class News extends Database {


    public function index() {
        
        $sql = "SELECT * FROM news";
        $result = $this->select($sql);
        include 'News_template.php';
    }
    
    public function addNews() {
        
      
        include 'AddNews_template.php';
    }


}
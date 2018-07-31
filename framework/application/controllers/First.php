<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class First extends CI_Controller{
    
    public function firstPage($name) {
        echo "Hello, " . $name;
        
    }
}


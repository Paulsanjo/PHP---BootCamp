<?php
include 'Worker.php';

class Company extends Worker{
    
    private $companyName;
    
    public function __construct(){
        
    }
    
    public function setCompanyName($companyName){
        $this->companyName = $companyName;
    }
    
    public function getCompanyName(){
        return $this->companyName;
    }
    
    public function getWorkerName(){
        return $this->getName();
    }
}

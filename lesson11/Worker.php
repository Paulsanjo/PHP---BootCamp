<?php

class Worker {

    private $name;
    private $age;
    private $salary;

    public function __construct($name, $age, $salary) {
        $this->name = $name;
        //$this->age = $age;
        $this->setAge($age);
        $this->salary = $salary;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function getSalary() {
        return $this->salary;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setAge($age) {
        if ($this->checkAge($age)) {
            $this->age = $age;
        }
    }

    public function setSalary($salary) {
        $this->salary = $salary;
    }

    private function checkAge($age) {
        return $age >= 1 && $age <= 100;
    }

}





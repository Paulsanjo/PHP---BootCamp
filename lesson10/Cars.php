<?php

class Cars{
    
    private $name = null;
    private $fuel = null;
    
    function __construct($name, $fuel) {
        $this->name = $name;
        $this->fuel = $fuel;
    }
    
    function getName() {
        return $this->name;
    }

    function getFuel() {
        return $this->fuel;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setFuel($fuel) {
        $this->fuel = $fuel;
    }
    
    public function __toString()
    {
        return $this->name. ' ' . $this->fuel;
    }
    
}

$car = new Cars('Volvo', 'full');
echo $car;

echo '<br>';

$car->setFuel('empty');

echo $car;




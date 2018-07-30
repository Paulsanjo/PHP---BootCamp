<?php

class Car
{
    private $id;
    private $carModel;
    private $carColor;
    private $carYear;
    private $carPrice;


    public function __construct($id, $carModel, $carColor, $carYear, $carPrice)
    {
        $this->id = $id;
        $this->carModel = $carModel;
        $this->carColor = $carColor;
        $this->carYear = $carYear;
        $this->carPrice = $carPrice;
    }

    public function getCarModel()
    {
        return $this->carModel;
    }

    public function setCarModel($carModel)
    {
        $this->carModel = $carModel;
    }

    public function getCarColor()
    {
        return $this->carColor;
    }

    public function setCarColor($carColor)
    {
        $this->carColor = $carColor;
    }

    public function getCarYear()
    {
        return $this->carYear;
    }

    public function setCarYear($carYear)
    {
        $this->carYear = $carYear;
    }

    public function getCarPrice()
    {
        return $this->carPrice;
    }

    public function setCarPrice($carPrice)
    {
        $this->carPrice = $carPrice;
    }

    public function getCarId()
    {
        return $this->id;
    }

    public function setCarId($id)
    {
        $this->id = $id;
    }

    public function __toString()
    {
        return 'ID: <b>' . $this->id . ', ' .
            '</b>Car model: <b>' . $this->carModel . ', ' .
            '</b>car color: <b>' . $this->carColor . ', ' .
            '</b>year: <b>' . $this->carYear . ', ' .
            '</b>price: <b>' . $this->carPrice . '€ </b>';
    }


}
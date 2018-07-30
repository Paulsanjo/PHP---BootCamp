<?php

class Worker
{
    private $id;
    private $workerName;
    private $workerAge;
    private $workerSalary;
    private $carsSold = 0;
    private $bonusesFromSales = 0;


    public function __construct($id, $workerName, $workerAge, $workerSalary)
    {
        $this->id = $id;
        $this->workerName = $workerName;
        $this->workerAge = $workerAge;
        $this->workerSalary = $workerSalary;
    }


    public function getWorkerName()
    {
        return $this->workerName;
    }

    public function setWorkerName($workerName)
    {
        $this->workerName = $workerName;
    }

    public function getWorkerAge()
    {
        return $this->workerAge;
    }

    public function setWorkerAge($workerAge)
    {
        $this->workerAge = $workerAge;
    }

    public function getWorkerSalary()
    {
        return $this->workerSalary;
    }

    public function setWorkerSalary($workerSalary)
    {
        $this->workerSalary = $workerSalary;
    }

    public function getCarsSold()
    {
        return $this->carsSold;
    }

    public function setCarsSold($carsSold)
    {
        $this->carsSold = $carsSold;
    }

    public function getBonusesFromSales()
    {
        return $this->bonusesFromSales;
    }

    public function setBonusesFromSales($bonusesFromSales)
    {
        $this->bonusesFromSales += $bonusesFromSales;
    }

    public function getWorkerId()
    {
        return $this->id;
    }

    public function setWorkerId($id)
    {
        $this->id = $id;
    }

    public function __toString()
    {
        return 'ID: <b>' . $this->id . ', ' .
            '</b>name: <b>' . $this->workerName . ', ' .
            '</b>age: <b>' . $this->workerAge . ', ' .
            '</b>salary: <b>' . $this->workerSalary . ', ' .
            '</b>Cars sold: <b>' . $this->carsSold . ', ' .
            '</b>Bonuses gained: <b>' . $this->bonusesFromSales . '</b>';
    }

    public function newCarSold()
    {
        $this->carsSold++;
    }


}
<?php

class Customer
{
    private $id;
    private $customerName;
    private $customerAge;
    private $purchasedCar = null;
    private $carForSale = null;


    public function __construct($id, $customerName, $customerAge)
    {
        $this->id = $id;
        $this->customerName = $customerName;
        $this->customerAge = $customerAge;
    }


    public function getCustomerId()
    {
        return $this->id;
    }

    public function setCustomerId($id)
    {
        $this->id = $id;
    }


    public function getCustomerName()
    {
        return $this->customerName;
    }

    public function setCustomerName($customerName)
    {
        $this->customerName = $customerName;
    }

    public function getCustomerAge()
    {
        return $this->customerAge;
    }

    public function setCustomerAge($customerAge)
    {
        $this->customerAge = $customerAge;
    }

    public function getCarForSale()
    {
        return $this->carForSale;
    }

    public function setCarForSale($carForSale)
    {
        $this->carForSale = $carForSale;
    }

    public function getPurchasedCar()
    {
        return $this->purchasedCar;
    }

    public function setPurchasedCar($purchasedCar)
    {
        $this->purchasedCar = $purchasedCar;
    }

    public function __toString()
    {
        return 'ID: <b>' . $this->id . ', ' .
            '</b>name: <b>' . $this->customerName . ', ' .
            '</b>age: <b>' . $this->customerAge . ', ' .
            '</b>car for sale: <b>' . $this->carForSale . ', ' .
            '</b>purchased car: <b>' . $this->purchasedCar . '</b>';
    }


}
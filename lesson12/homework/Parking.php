<?php

class Parking
{
    private $id;
    private $parkingName;
    private $workers;
    private $cars;
    private $customers;


    public function __construct($id, $parkingName, $workers, $cars, $customers)
    {
        $this->id = $id;
        $this->parkingName = $parkingName;
        $this->workers = $workers;
        $this->cars = $cars;
        $this->customers = $customers;
    }


    public function getParkingId()
    {
        return $this->id;
    }

    public function setParkingId($id)
    {
        $this->id = $id;
    }


    public function getParkingName()
    {
        return $this->parkingName;
    }

    public function setParkingName($parkingName)
    {
        $this->parkingName = $parkingName;
    }

    public function getWorkers()
    {
        return $this->workers;
    }

    public function setWorkers($workers)
    {
        $this->workers = $workers;
    }

    public function getCars()
    {
        return $this->cars;
    }

    public function setCars($cars)
    {
        $this->cars = $cars;
    }

    public function getCustomers()
    {
        return $this->customers;
    }

    public function setCustomers($customers)
    {
        $this->customers = $customers;
    }

    public function __toString()
    {
        return 'ID: <b>' . $this->id . ', ' .
            '</b>parking name: <b>' . $this->parkingName . ', ' .
            '</b>workers count: <b>' . count($this->workers) . ', ' .
            '</b>cars for sale: <b>' . count($this->cars) . ', ' .
            '</b>customers: <b>' . count($this->customers) . '</b>';
    }

    public function addCar($car)
    {
        $this->cars[] = $car;
    }

    public function addCustomerCarForSale($car, $customerId)
    {
        $customer = $this->findCustomerById($customerId);
         if($customer != null){
             $customer->setCarForSale($car->getCarId());
             $this->addCar($car);
         } else {
             return 'Wrong IDs';
         }
    }

    public function addWorker($worker)
    {
        $this->workers[] = $worker;
    }

    public function addCustomer($customer)
    {
        if ($customer->getCustomerAge() >= 18) {
            $this->customers[] = $customer;
        } else {
            return 'Customer must be 18 yo';
        }
    }

    public function saleCar($carId, $workerId, $customerId)
    {
        $car = $this->findCarById($carId);
        $worker = $this->findWorkerById($workerId);
        $customer = $this->findCustomerById($customerId);

        if ($car != null && $worker != null && $customer != null) {
            $workerBonus = $car->getCarPrice() / 100 * 10;
            $worker->newCarSold();
            $worker->setBonusesFromSales($workerBonus);
            $customer->setPurchasedCar($car->getCarId());
            foreach ($this->cars as $key => $carToDelete){
                if ($carToDelete->getCarId() == $carId){
                    unset($this->cars[$key]);
                }
            };
        } else {
            return 'Wrong IDs';
        }
    }

    public function findCarById($carId)
    {
        foreach ($this->cars as $car){
            if ($car->getCarId() == $carId){
                return $car;
            }
        }
        return null;
    }

    public function findWorkerById($workerId)
    {
        foreach ($this->workers as $worker){
            if ($worker->getWorkerId() == $workerId){
                return $worker;
            }
        }
        return null;
    }

    public function findCustomerById($customerId)
    {
        foreach ($this->customers as $customer){
            if ($customer->getCustomerId() == $customerId){
                return $customer;
            }
        }
        return null;
    }


}

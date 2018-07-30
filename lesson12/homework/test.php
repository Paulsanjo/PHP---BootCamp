<?php

require_once 'Car.php';
require_once 'Parking.php';
require_once 'Worker.php';
require_once 'Customer.php';

//Predefined data
$carsArray = [
    new Car(1001,'Audi S4', 'blue', '2008', '12000'),
    new Car(1002, 'Volvo S80', 'black', '2001', '4000'),
    new Car(1003, 'VW Golf 5', 'grey', '2005', '3000'),
    new Car(1004, 'AUDI A5', 'red', '2006', '8000'),
    new Car(1005,'Jeep Grand Cherokee', 'red', '2012', '16000'),
];


$workersArray = [
    new Worker(101,'Anton Ivanov', 25, 1000),
    new Worker(102,'Ivan Petrov', 33, 1100),
    new Worker(103,'Jogn Snow', 65, 1400),
];

$customersArray = [];

$parking = new Parking(5001,'Rumbula', $workersArray, $carsArray, $customersArray);

echo $parking->findCarById(1006);

//Echo all initial data
echo '<h3>Initial data: </h3>';
echo $parking . '<br><br>';

echo '<b>Cars: </b><br>';
foreach ($parking->getCars() as $car) {
    echo $car . '<br>';
}

echo '<br>';

echo '<b>Workers: </b><br>';
foreach ($parking->getWorkers() as $worker) {
    echo $worker . '<br>';
}

echo '<br>';

echo '<b>Customers: </b><br>';
foreach ($parking->getCustomers() as $customer) {
    echo $customer . '<br>';
}

echo '<hr>';

//Success test 1, addCustomer(), saleCar() functions
$parking->addCustomer(new Customer(2001,'Aleksejs Prokofjevs', '27'));
$parking->saleCar(1005, 101, 2001);

echo '<h3>Test 1 (add new client, sale car): Post process data: </h3>';
echo $parking . '<br><br>';

echo '<b>Cars: </b><br>';
foreach ($parking->getCars() as $car) {
    echo $car . '<br>';
}

echo '<br>';

echo '<b>Workers: </b><br>';
foreach ($parking->getWorkers() as $worker) {
    echo $worker . '<br>';
}

echo '<br>';

echo '<b>Customers: </b><br>';
foreach ($parking->getCustomers() as $customer) {
    echo $customer . '<br>';
}

echo '<hr>';

//Success test2, addCustomer(), addCar() functions
$parking->addCustomer(new Customer(2002,'Anton Vorobyov', '35'));
$parking->addCustomerCarForSale(new Car('1006', 'Porsche 911 GT2', 'yellow', '2012', '194000'), 2002);

echo '<h3>Test 2 (new client, take car for sale from client): Post process data: </h3>';
echo $parking . '<br><br>';


echo '<b>Cars: </b><br>';
foreach ($parking->getCars() as $car) {
    echo $car . '<br>';
}

echo '<br>';

echo '<b>Workers: </b><br>';
foreach ($parking->getWorkers() as $worker) {
    echo $worker . '<br>';
}

echo '<br>';

echo '<b>Customers: </b><br>';
foreach ($parking->getCustomers() as $customer) {
    echo $customer . '<br>';
}
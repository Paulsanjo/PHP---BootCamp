<?php

include 'Company.php';

$workerIvan = new Worker('Ivan', 25, 1000);
$workerVasja = new Worker('Vasja', 26, 2000);

echo $workerIvan->getSalary() + $workerVasja->getSalary();
echo '<br>';
echo $workerIvan->getAge() + $workerVasja->getAge();
echo '<br>';
echo $workerIvan->getAge();
echo '<br>';
$workerIvan->setAge(33);
echo $workerIvan->getAge();

echo '<br><br>';

$company = new Company();
$company->setCompanyName('HelloIT');
$company->setName('Alex');

echo $company->getName();


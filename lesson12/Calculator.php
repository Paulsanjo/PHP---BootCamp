<?php

class Calculator {

    private $number1;
    private $number2;
    private $action;

    function __construct($number1, $number2, $action) {
        if ($number1 != "" && $number1 != "" &&
                is_numeric($number1) && is_numeric($number2)) {
            $this->number1 = $number1;
            $this->number2 = $number2;
            $this->action = $action;
        } else {
            echo '1st and 2nd parametrs must be numbers!<br>';
        }
    }

    function getNumber1() {
        return $this->number1;
    }

    function getNumber2() {
        return $this->number2;
    }

    function getAction() {
        return $this->action;
    }

    function setNumber1($number1) {
        $this->number1 = $number1;
    }

    function setNumber2($number2) {
        $this->number2 = $number2;
    }

    function setAction($action) {
        $this->action = $action;
    }

    function getResult() {
        return $this->calculate($this->number1, $this->number2, $this->action);
    }

    private function calculate($number1, $number2, $action) {
        switch ($action) {
            case "+":
                return $number1 + $number2;
            case "-":
                return $number1 - $number2;
            case "*":
                return $number1 * $number2;
            case "/":
                if ($number2 != 0) {
                    return $number1 / $number2;
                } else {
                    return 'Error, division by zero';
                }
            case "^":
                return pow($number1, $number2);
            case "%":
                return $number1 % $number2;
            default:
                return 'Wrong action';
        }
    }

    function getInfo() {
        return 'You can use this actions: '
                . '\'+\', \'-\', \'*\', \'/\', \'^\', \'%\'';
    }

}

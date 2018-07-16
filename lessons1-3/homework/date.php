<?php

if (isset($_GET["name"]) && isset($_GET["date"])) {
    $name = $_GET['name'];
    $date = $_GET['date'];
    $age = 0;

    if (empty($name) || empty($date)) {
        exit('Name or date is empty');
    }
//String explode and format check
    $day = 0;
    $month = 0;
    $year = 0;
    if (!empty(explode('.', $date)[0]) && !empty(explode('.', $date)[1]) && !empty(explode('.', $date)[2])) {

        $day = explode('.', $date)[0];
        $month = explode('.', $date)[1];
        $year = explode('.', $date)[2];
    } else {
        exit('Wrong date format');
    }

//Calculate age
    $actualDay = getdate(time())['mday'];
    $actualMonth = getdate(time())['mon'];
    $actualYear = getdate(time())['year'];
    $happyBithDay = '';

    //check date that not bigger than actual
    if ($year <= 0 || $year > 2018 || ($year == 2018 && $month > $actualMonth) || ($year == 2018 && $month == $actualMonth && $day > $actualDay)) {
        exit('Wrong date format');
    }
    if (($year > 0 && $year <= 2018)) {
        $age = $actualYear - $year;
    }
    if (($actualMonth < $month) || ($actualMonth == $month && $actualDay < $day)) {
        $age--;
    }
    if ($actualMonth == $month && $actualDay == $day) {
        $happyBithDay = 'Happy birth Day';
    }


//switch to month written by text
    switch ($month) {
        case '01':
            $month = "January";
            break;
        case '02':
            $month = 'February';
            break;
        case '03':
            $month = 'March';
            break;
        case '04':
            $month = 'April';
            break;
        case '05':
            $month = 'May';
            break;
        case '06':
            $month = 'June';
            break;
        case '07':
            $month = 'July';
            break;
        case '08':
            $month = 'August';
            break;
        case '09':
            $month = 'September';
            break;
        case '10':
            $month = 'October';
            break;
        case '11':
            $month = 'November';
            break;
        case '12':
            $month = 'December';
            break;
        default:
            echo 'Wrong date format';
            exit;
    }

//print results
    echo 'Actual date is: ', $actualDay, '.', $actualMonth, '.', $actualYear, '<br>';
    echo $name, ' ', $month, ' ', $age;
    echo '<br>', $happyBithDay;
} else {
    echo 'Wrong parameters';
}
?>


<?php

$auto = [
    'audi' => [
        'a4' => [
            'Audi A4 2009, 2.0 TFSI',
            'Audi A4 2002, 2.5 TDI',
        ],
        'a6' => [
            'Audi A6 1999, 2.5 TDI',
            'Audi A6 2010, 3.0 TDI',
            'Audi A6 2018, 3.0 TFSI',
            'Audi RS6 2018, 4.0 TFSI',
        ],
        'q7' => [
            'Audi Q7 2006, 3.0 TDI',
            'Audi Q7 2010, 3.0 TFSI',
            'Audi Q7 2012, 6.0 TDI',
        ],
    ],
    'honda' => [
        'accord' => [
            'Honda Accord 1998 Coupe, 3.0',
            'Honda Accord 2002, 2.4',
            'Honda Accord 2008, 2.0',
        ],
        'civic' => [
            'Honda Civic 1991 Coupe, 1.5',
            'Honda Civic 2008 Coupe, 2.0',
        ],
    ],
    'bmw' => [
        '3' => [
            'BMW 320 1996, 2.0',
            'BMW 330 2006, 3.0',
            'BMW 320d 2002, 2.0d',
        ],
        '5' => [
            'BMW 520d 2012, 2.0',
            'BMW 530d 2011, 3.0d',
            'BMW 535i 1999, 3.5',
            'BMW 540 2010, 4.0',
        ],
        'x5' => [
            'BMW X5 2006, 3.0d',
            'BMW X5M 2010, 4.4',
        ],
    ],
    'vw' => [
        'golf' => [
            'VW Golf 1999, 1.9 TDI',
            'VW Gold 2004, 1.8',
            'VW Golf 2010, 1.6 TDI'
        ],
        'passat' => [
            'VW Passat 2000, 1.9 TDI',
            'VW Passat 2006, 2.0 TDI',
            'VW Passat 2010, 2.0 TSI',
        ],
    ],
    'skoda' => [
        'octavia' => [
            'Skoda Octavia 1999, 1.9 TDI',
            'Skoda Octavia 2014, 1.8 TSI',
            'Skoda Octavia 2015, 1.4 TSI',
        ],
        'superb' => [
            'Skoda Superb 2001, 2.5 TDI',
            'Skoda Superb 2009, 2.0 TSI',
        ],
    ],
    'jeep' => [
        'cherokee' => [
            'Jeep Cherokee 2001, 2.7d',
            'Jeep Cherokee 2010, 2.0',
        ],
        'grand' => [
            'Jeep Grand Cherokee 2001, 2.7d',
            'Jeep Grand Cherokee 2010, 3.0d',
            'Jeep Grand Sherokee SRT8 2011, 6.1',
        ],
    ],
    'mercedes' => [
        's' => [
            'Mercedes S320 2007, 3.2',
            'Mercedes S500 2011, 5.0',
            'Mercedes S600 1998, 6.0',
        ],
        'e' => [
            'Mercedes E220 2004, 2.0',
            'Mercedes E320 2005, 3.2d',
            'Mercedes E400 2013, 3.0d',
        ],
    ],
    'alfaromeo' => [
        '156' => [
            'Alfa Romeo 156 2004, 1.9d',
        ],
        '159' => [
            'Alfa Romeo 159 2006, 1.9d',
            'Alfa Romeo 159 2007, 3.2',
            'Alfa Romeo 159 2009, 2.4d',
            'Alfa Romeo 150 2011, 2.0d',
        ],
        'Giulia' => [
            'Alfa Romeo Giulia 2016, 2.2d',
            'Alfa Romeo Giulia 2017, 2.9'
        ],
    ],
    'toyota' => [
        'supra' => [
            'Toyota Supra 1993, 3.0',
            'Toyota Supra 1995, 3.0',
        ],
        'avensis' => [
            'Toyota Avensis 1999, 2.0',
            'Toyota Avensis 2008, 1.6',
        ],
        'landcruiser' => [
            'Toyota Land Cruiser 2007, 3.5',
        ],
    ],
    'nissan' => [
        'gtr' => [
            'Nissan GTR 1999, 2.5',
            'Nissan GTR 2012, 3.5',
        ],
    ],
];

//show all elements in array $auto
print_r($auto);

echo '<br><br>';

//show all elemetns in array $audo['alfaromeo']
print_r($auto['alfaromeo']) . '<br>';

echo '<br><br>';

//echo elements of array $auto['mercedes]['e'] using foreach
foreach ($auto['mercedes']['e'] as $value) {
    echo $value . '<br>';
}

echo '<br><br>';

//echo elements of array $auto['audi']['a6'] using for
for ($i = 0; $i < count($auto['audi']['a6']); $i++) {
    echo $auto['audi']['a6'][$i] . '<br>';
}

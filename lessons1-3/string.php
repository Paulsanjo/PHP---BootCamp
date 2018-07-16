<?php

//'string' example
$str1 = 'string $str1';
echo $str1;

echo '<br>';

//"string" example
$str2 = "New string + $str1";
echo $str2;

echo '<br>';

//Heredoc example
$str3 = <<<EOD
Heredoc String
example $str1;
EOD;
echo $str3;

echo '<br>';

//Nowdoce example
$str4 = <<<'EOD'
Nowdoc example String $str1
EOD;
echo $str4;

echo '<br>';
echo $str1[7];


?>


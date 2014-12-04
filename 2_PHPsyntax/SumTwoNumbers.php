<?php
$firstNumber = 2;
$secondNumber = 5;
$result = $firstNumber + $secondNumber;

echo '$firstNumber + $secondNumber = ' . $firstNumber .' + '.$secondNumber . ' = ' . number_format((float)$result, 2, '.', '' );

?>

<?php
$firstNumber = 1.567808;
$secondNumber = 0.356;
$result = $firstNumber + $secondNumber;

echo '<br/>'.'$firstNumber + $secondNumber = ' . $firstNumber ." + ".$secondNumber . " = " . number_format((float)$result, 2, '.', '' );

?>

<?php
$firstNumber = 1234.5678;
$secondNumber = 333;
$result = $firstNumber + $secondNumber;

echo '<br/>'.'$firstNumber + $secondNumber = ' . $firstNumber ." + ".$secondNumber . " = " . number_format((float)$result, 2, '.', '' );

?>

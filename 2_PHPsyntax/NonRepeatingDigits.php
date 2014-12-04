<?php
function findNumbers($n) {
    $numbers = [];
    for($a = 1; $a <= 9; $a++) {
        for($b = 0; $b <= 9; $b++) {
            for($c = 0; $c <= 9; $c++) {
                if($a != $b && $b != $c && $c != $a) {
                    $currentNumber = $a . $b . $c;
                    if((int)$currentNumber <= $n) {
                        $numbers[] = $currentNumber;

                    }
                }
            }
        }
    }
    return $numbers;
}
function printFoundNumbers($numbers) {
    $numbersCount = count($numbers);
    if($numbersCount == 0) {
        echo 'no';
    }
    else {
        for($i = 0; $i < $numbersCount; $i++) {
            echo $numbers[$i];
            if($i < $numbersCount - 1) {
                echo ', ';
            }
        }
    }
    echo '<br/>';
}
$foundNumbers = findNumbers(1234);
printFoundNumbers($foundNumbers);
$foundNumbers = findNumbers(145);
printFoundNumbers($foundNumbers);
$foundNumbers = findNumbers(15);
printFoundNumbers($foundNumbers);
$foundNumbers = findNumbers(247);
printFoundNumbers($foundNumbers);
?>
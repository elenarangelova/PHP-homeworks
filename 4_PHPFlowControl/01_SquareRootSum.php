<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Square Root Sum</title>
</head>
<body>

<?php
$sumOfNumbers = 0;
for($i = 0; $i <=100; $i++){
    if($i % 2 == 0){
        $squareRootNum = sqrt($i);
        $squareRootNum = (float)round($squareRoonNum, 2);
        $sumOfNumbers += $squareRootNum;

        echo "\<tr><br\\>" . "<td>" . $i . "\</td><br\\>".
        "\<td>". $squareRootNum . "\</td><br\\></tr>";
    }
}
?>
</body>
</html>
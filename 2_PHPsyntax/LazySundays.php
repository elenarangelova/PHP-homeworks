<?php
$month = date("m");
$year = date("Y");
for ($i = 1; $i < 32; $i++) {
    $dateString = $year.'-'.$month.'-'.$i;
    $newDate = new DateTime($dateString);
    $sunday = date_format($newDate, "l");
    if ($sunday == 'Sunday') {
        echo date_format($newDate, 'jS F, Y')."<br>";
    }
}
?>



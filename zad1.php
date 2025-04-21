<?php

$lastName = "karmyshev";
$firstName = "ildar";
$middleName = "ruslanovich";

$lastNameFormatted = ucfirst($lastName);
$initials = strtoupper(mb_substr($firstName, 0, 1)) . "." . strtoupper(mb_substr($middleName, 0, 1)) . ".";


echo "<strong>Вывод:</strong><br>";
echo $lastNameFormatted . " " . $initials . "<br><br>";


//Часть 2

echo "<strong>Субботы в 2021 году (1–20 число месяца):</strong><br>";

$startDate = strtotime("2021-01-01");
$endDate = strtotime("2021-12-31");

while ($startDate <= $endDate) {
    $day = date("j", $startDate);       
    $weekday = date("N", $startDate);   

    if ($weekday == 6 && $day <= 20) {
        echo date("d.m.Y", $startDate) . "<br>";
    }

    $startDate = strtotime("+1 day", $startDate);
}
?>

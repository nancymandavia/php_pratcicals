<?php

$date_1 = new DateTime('2023-07-07');
$date_2 = new DateTime('2026-07-07');

$final_date = date_diff($date_1, $date_2);

echo $final_date->format('%Y');
?>
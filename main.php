<?php

$koma = [];

print_r($koma);

for ($week = 1; $week < 18; $week ++) {
    for ($day = 0; $day < 5; $day ++) {
        for ($hour = 1; $hour < 5; $hour ++) {
            if ($week <= 8) {
                if (($hour == 3) or 
                    ($hour == 4 and $day == 3 and $week == 4)) {
                    $koma[$week][$day][$hour] = 'ph1';
                }
                if (($hour == 4 and $day != 3) or
                    ($hour == 2 and $day == 3 and $week <= 4)) {
                    $koma[$week][$day][$hour] = 'ph2';
                }
                if ((5 <= $week and 3 <= $day) or
                    ($week == 4 and $day == 3 and 3 <= $hour)) {
                    $koma[$week][$day][$hour] = 'phe';
                }
                if ($hour ==2 and $day != 3) {
                    $koma[$week][$day][$hour] = 'bc2';
                }
                if ($hour ==1 and ($day % 2 == 0)) {
                    $koma[$week][$day][$hour] = 'gen';
                }
            }
            if (9 <= $week and $week <= 10) {
                if ($hour == 4) {
                    $koma[$week][$day][$hour] = 'bc2';
                }
                else {
                    $koma[$week][$day][$hour] = 'bce';
                }
            }
        }
    }
}



print_r($koma);

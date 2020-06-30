<?php
function clock()
{
    $heure = 0;


    while ($heure <= 23) // HEURE
    {
        $minute = 0;
        while ($minute <= 59) // MINUTE
        {
            if ($heure < 10) {
                echo "0";
            }
            echo $heure;
            echo ":";
            if ($minute < 10) {
                echo "0";
            }
            echo $minute;
            echo "<br>";
            $minute = $minute + 1;
        }
        $heure++;
    }
}
clock();

<?php
function compter_dizaine($maximum)
{
    for ($i = 1; $i <= $maximum; $i++) {
        echo $i . "<br/>";
        if ($i % 100 == 0) {
            echo "Ceci est une centaine. <br/>";
        } else if ($i % 10 == 0) {
            echo "Ceci est une dizaine. <br/>";
        }
    }
}


compter_dizaine(100);

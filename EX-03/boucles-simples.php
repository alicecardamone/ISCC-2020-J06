<?php
function compter($maximum)
{
    $i = 1;
    while ($i < $maximum + 1) {
        echo $i . '<br/>';
        $i++;
    }
}

function compter_for($maximum)
{
    for ($i = 1; $i <= $maximum + 1; $i++) {
        echo $i . '<br/>';
    }
}

compter(10);
echo "<br>";
compter_for(10);

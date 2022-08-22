<?php

    $i = 1;
    $c = $_GET["cont"];

    while ($i <= $c) {
        if ($i % 4 != 0) {
        echo "$i - ";
        } else {
            echo " PIN! <br>";
        } $i++;
    } 
    echo "FIM!"
?>
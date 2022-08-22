<?php

    $c = $_GET["c"];
    $m = $_GET["m"];

    while ($c >= 0) {
        if ($c % $m == 0) {
            echo "[" . $c . "] - ";
        } else {
            echo "$c - ";
        }
        $c--;
    }
    echo "FIM!"
?>
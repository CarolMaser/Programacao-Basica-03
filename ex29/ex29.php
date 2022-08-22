<?php

    $c = $_GET["cont"];
    $fim = $_GET["fim"];
    $inc = $_GET["inc"];

    while ($c <= $fim) {
        echo "$c - ";
        $c = $c + $inc;
    }
    echo "FIM!"

?>
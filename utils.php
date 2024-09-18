<?php

function apartat($num){
    $divider = "";
    if ($num > 1){
        $divider = "<br/><hr class='divider'></hr>";
    }

    echo "$divider<h1>Exercici $num</h1>";
}
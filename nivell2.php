<?php

include 'utils.php';

apartat(1);
echo "<h2>La Trucada</h2>";

function Trucada(int|float $durada): void{
    $price = 10;
    $extra = 0;

    if ($durada > 3){
        $extra = floor($durada - 3 * floor($durada / 3));
    }


    echo "La trucada de " .  number_format($durada, 2, ',', ' ') . " min. et surt a: <b>" . $price + $extra * 5 . "€</b>.<br/>";
}

Trucada(3.9);

echo "<h2>La Botiga</h2>";

function Botiga(int $num, string $type): void{
    static $total;

    $pattern = "/xocolat(a|es)$||xiclet[s]?||caramel[s]?/i";

    if(preg_match($pattern, $type)){
        switch($type){
            case "xocolates":
                $type = "xocolata";
                break;
            case "xiclets":
                $type = "xiclet";
                break;
            case "caramels":
                $type = "caramel";
                break;
            default:
                break;
        }
    }

    switch($type){
        case "xocolata":
            $total += $num * 1;
            break;
        case "xiclet":
            $total += $num * 0.50;
            break;
        case "caramel":
            $total += $num * 1.50;
            break;
        default:
            echo "No tenim $type.<br/>";
    }
    if ($total){
        echo "El total suma: <b>$total</b>" . "€<br/>";
    }
}

Botiga(5, "xocolates");
Botiga(4, "xiclets");
Botiga(1, "caramel");
Botiga(1, "cacaolat");

?>
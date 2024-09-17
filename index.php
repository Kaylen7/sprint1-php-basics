<style>
    .divider{
        margin-right: 20%;
    }
</style>

<?php

$int = 20;
$float = 18.5;
$str = "Això és una cadena";
$bool = false;

function apartat($num){
    $divider = "";
    if ($num > 1){
        $divider = "<br/><hr class='divider'></hr>";
    }

    echo "$divider<h1>Exercici $num</h1>";
}

apartat(1);

echo "Integer: $int <br/>Double: $float <br/>String: $str <br/> $bool";

const NAME = "Sara";
echo "<h2 style='color:green'>" . NAME . "</h2>";

apartat(2);

$hello_world = "Hello, World!";
echo $hello_world . "<br/>";

echo "<b>Majúscules: </b> " . strtoupper($hello_world) . "<br/>";
echo "<b>Llargada: </b>" . strlen($hello_world) . "<br/>";
echo "<b>Del revés: </b> " . strrev($hello_world) . "<br/>";

$new_var = "Aquest és el curs de PHP";
echo "<b>Concat</b>: $hello_world $new_var" . "<br/>";

apartat(3);
$X = 5;
$Y = 3;
$N = 1.5;
$M = 6.21;

echo "VARIABLES: <b>X</b>: $X, <b>Y:</b> $Y, <b>N:</b> $N, <b>M:</b> $M" . "<br/><br/>";

$all = [[$X, $Y], [$N, $M]];

function sumar($a, $b){
    $a += $b;
    return $a;
}
function restar($a, $b){
    $a -= $b;
    return $a;
}
function multiplicar($a, $b){
    $a = $a * $b;
    return $a;
}
function mod($a, $b){
    $a = $a % $b;
    return $a;
}

function dividir($a, $b){
    $a = $a / $b;
    return $a;
}

function doble($a){
    $a = $a*2;
    return $a;
}

foreach($all as $e){
    
    echo "<b>Suma</b>: " . sumar($e[0], $e[1]) . "<br/>" .
    "<b>Resta</b>: " . restar($e[0], $e[1]) . "<br/>" .
    "<b>Producte</b>: " . multiplicar($e[0], $e[1]) . "<br/>" .
    "<b>Mòdul</b>: " . mod($e[0], $e[1]) . "<br/><br/>";
}

$flat_array = call_user_func_array('array_merge', $all);

foreach($flat_array as $n){
    static $aux = 1;
    $aux *= $n;

    echo "<b>Doble:</b> " . doble($n) . "<br/>";
}

echo "<br/>Producte de totes les variables: " . $aux . "<br/>";

echo "Suma de totes les variables: " . array_reduce($flat_array, "sumar") . "<br/>";

echo "<h2>b)</h2>";

function Calculadora($a, $b, $arg){
    $result = $arg($a, $b);

    if($arg === "dividir"){
        $result = number_format($result, 2, ',', ' ');
    }

    echo "<b>El resultat de $arg $a i $b és:</b> " . $result . "<br/>";
}

Calculadora($X, $Y, "sumar");
Calculadora($X, $Y, "restar");
Calculadora($X, $Y, "multiplicar");
Calculadora($X, $Y, "dividir");

apartat(4);

function Counter($num = 10, $step = 1){
    $art = "d'";
    if ($step != 1){
        $art = "de ";
    }
    echo "Compta $art$step en $step, des d'1 fins a $num<br/>";

    for($i = 1; $i < $num + 1; $i = $i + $step){
        echo "$i ";
    }
}

Counter(5, 2);

apartat(5);

function Nota($nota){

}

?>

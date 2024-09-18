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
include 'utils.php';

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

function sumar(int|float|null $a, int|float|null $b): int|float{
    $a += $b;
    return $a;
}
function restar(int|float $a, int|float $b): int|float{
    $a -= $b;
    return $a;
}
function multiplicar(int|float $a, int|float $b): int|float{
    $a = $a * $b;
    return $a;
}
function mod(int|float $a, int|float $b): int|float{
    if (is_float($a) && is_float($b)){
        $a = $a - $b * floor($a / $b);
    } else {
        $a = $a % $b;
    }
    return $a;
}

function dividir(int|float $a, int|float $b): int|float{
    $a = $a / $b;
    return $a;
}

function doble(int|float $a): int|float{
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

function Calculadora(int|float $a, int|float $b, string $arg): void{
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

function Counter(int|float $num = 10, int $step = 1): void{
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

function Nota(int|float $nota): void{
    $base = $nota;
    $str = "Notes en base a 100<br/>";
    if (floor($nota / 10) < 1){
        $str = "Notes en base a 10<br/>";
        $base = $nota * 10;
    }

    echo $str;

    if($base >= 60){
        echo "Primera Divisió";
    } elseif($base >= 45){
        echo "Segona Divisió";
    } elseif($base >= 33){
        echo "Tercera Divisió";
    } else {
        echo "L'estudiant ha de reprovar.";
    }
}

Nota(100);

apartat(6);

function isBitten(): string{
    $a = (random_int(0, 1)) === 0;

    return $a ? "True" : "False";
}

echo "<b>M'ha mossegat?</b><br/> " . isBitten();

?>

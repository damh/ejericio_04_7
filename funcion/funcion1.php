<?php
//se pueden duplicar los resultados de las funciones 
//tambien una funcion se puede desplasar por cualquier lado
//echo negativo(15);
//$w = negativo(15);
//echo $w;
$b = negativo(20);
//echo "<br>$b<br>";
$pe = 2;
suma($pe, negativo(20),negativo(20),negativo(20));



function suma ($p, $q,$pe,$w)
{
    $suma = $p + $q + $w;
    echo "la suma es = $suma";
    //echo "<br></br>$pe";
    //echo "<br></br>$w";

}
function negativo ($numero)
{
    return $numero * -1;
}




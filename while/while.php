<?php
$i = 0;
$h=1;
/*while ($i <= 10) 
{
    $i++;
    echo "<br><h1>$i<br></h1>"; 
    
}*/

while ($i  <= 10 )
{
    $i++;
    $h++;
    if ($h > 6) $h =1;
    echo "<h$h><br>$i</br></h$h>";
}
/*while ($i < 10) 
{
    $i++;
    echo "<h$i>hola<h$i>"; 
    
}*/
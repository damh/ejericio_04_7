<?php
  $edad = 18;
  $dinero = 40;
  $paso = 0;

  //if ($edad >=18 or $dinero == 40) 
  /*if ($edad + $dinero > 0)
  {
      echo "cumple con los requisitos para comprar el televisor.";
  }
  else 
  {
      echo "no cumple con los requisitos para comprar el televisor";
  } */

  for ($paso=-10; $paso <= 10; $paso ++)
  {
      if ($paso < 0)
      {
          echo "<br><b>$paso</b><br>";
      }
    else
    {
        echo "<br>$paso.</br>";
    }
      
  }




<?php

  $valtozo = 12;
  print $valtozo."<br>";
  //$valtozo=$valtozo+10;
  $valtozo+=10;
  print $valtozo."<br>";
  
  $eset1 = $valtozo++;
  $eset2 = ++$valtozo;
  print $eset1."<br>";
  print $eset2."<br>";
  
  // ($v++ + 12) * 12 
  
  // tombok
  $tomb[0] = "alma";
  $tomb[1] = "korte";
  
  $tomb = array("alma", "korte", "banan");
  
  print $tomb[2]."<br />";
  
  print "tomb elemeinek a szama: ".count($tomb)."<br />";
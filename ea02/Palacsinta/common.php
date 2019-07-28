<?php

print "valami = $valami<br>";

$extrak = array("tejszinhab" => 50, "meggy" => 50, "porcukor" => 0);
//$palacsintak = array("kakaos" => 150, "lekvaros" => 120, "turos" => 200, "pudingos" => 250);

$palik = array("kakaos", "lekvaros", "turos", "pudingos", "dios");
$arak = array(150, 120, 200, 250, 300);
$palacsintak = array_combine($palik, $arak);

/*
print_r($palik); print "<br>"; 
print_r($arak); print "<br>";
print_r($palacsintak); print "<br>";
 */
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
  $szemely["vnev"] = "Gipsz";
  $szemely["knev"] = "Jakab";
  $szemely["eletkor"] = 25;
  $szemely["foglalkozas"] = "lakatos";
  $szemely["tanatlag"] = 4.2;
  $szemely["nyelvtudas"] = array("magyar", "angol", "urdu");
  print $szemely["vnev"]." ".$szemely["knev"]."<br>";
  print "Tanatlag: ".$szemely["Tanatlag"]."<br>";
  print "Tanatlag: ".$szemely["tanátlag"]."<br>";
  print "Tanatlag: ".$szemely["tanatlag"]."<br>";
  print_r($szemely);
  print "<br>";
  $v1 = 1;
  $v2 = "1";
  if($v1 == $v2) print "egyenloek '1' ==  1 <br>";
  if($v1 === $v2)
      print "egyenloek '1' ===  1 <br>";
  else
      print "nem egyenloek '1' ===  1 <br>";
  if("3" > 2) print "nagyobb<br>";
  $napszak = "del";
  switch( $napszak ) {
        case "reggel" : print "kifli + kakao<br>"; break;
        case "del"    : print "husleves + csirkecomb<br>"; break;
        case "este"   : print "palacsinta<br>"; break;
   default : print "egyeb eset<br>"; break;
 }
 print "<br>";
  $napszak = "reggel";
  switch( $napszak ) {
        case "reggel" : print "kifli + kakao<br>"; 
        case "del"    : print "husleves + csirkecomb<br>";
        case "este"   : print "palacsinta<br>"; break;
   default : print "egyeb eset<br>"; break;
 }
  $honap = 4; // 1..12
  if($honap == 1) $nap = 31;
  if($honap == 2) $nap = 28;
  if($honap == 3) $nap = 31;
  if($honap == 4) $nap = 30;
  if($honap == 5) $nap = 31;
  if($honap == 6) $nap = 30;
  if($honap == 7) $nap = 31;
  if($honap == 8) $nap = 31;
  if($honap == 9) $nap = 30;
  if($honap == 10) $nap = 31;
  if($honap == 11) $nap = 30;
  if($honap == 12) $nap = 31;
  print "napok szama=$nap<br>";
  if($honap == 1 || $honap == 3 || $honap == 5 || $honap == 7 || $honap == 8 || $honap == 10 || $honap == 12)
      $nap = 31;
  else 
    if($honap == 4 || $honap == 6 || $honap == 9 || $honap == 11 )
      $nap = 30;
    else 
      if($honap == 2) $nap = 28;
  print "napok szama=$nap<br>";
  $n31 = array(1,3,5,7,8,10,12);
  $n30 = array(4,6,9,11);
  if(in_array($honap, $n31)) $nap = 31;
  if(in_array($honap, $n30)) $nap = 30;
  if($honap == 2) $nap = 28;
  print "napok szama=$nap<br>";
  $honap_nap = array(1=>31, 2=>28, 3=>31, 4=>30, 5=>31, 6=>30,
                     7=>31, 8=>31, 9=>30, 10=>31, 11=>30, 12=>31);
  print "napok szama=$honap_nap[$honap]<br>";
  if(in_array($honap, array(3,4,5)))
    $tavasze = "igen tavasz";
  else
    $tavasze = "sajna NEM tavasz";
  print "Tavasz-e: $tavasze<br>";
  //$tavasze = ( logikai kif  ) ? ( igen ertek  ) : ( nem ertek );
  $tavasze = ( in_array($honap, array(3,4,5))  ) ? ( "igen tavasz"  ) : ( "sajna NEM tavasz" );
  $tavasze = in_array($honap, array(3,4,5)) ? "igen tavasz" :  "sajna NEM tavasz" ;
  print "Tavasz-e: $tavasze<br>";
  print "Tavasz-e: ".(in_array($honap, array(3,4,5)) ? "igen tavasz" : "sajna NEM tavasz")."<br>";
  // ------------------------------
  for($i=0;$i<10;$i++) {
      print "$i<br>";
  }
  for($i=1,$j=0 ;  $i<2000 ;  $i*=2,$j++) {
      print "2^$j = $i<br>";
  }
  print "<table border='1'>";
  for($i=0;$i<=10;$i++) {
    print "<tr>";
    for($j=0;$j<=10;$j++) {
        print "<td>$i * $j = ".($i*$j)."</td>";
    }
    print "</tr>";
  }
  print "</table>";
  $i=1;
  while($i<2000) {
      print "$i<br>";
      $i*=2;
  }
  for($i=1;$i<=20;$i++) {
      //if($i==13) break;
      if($i==13) continue;
      print "$i<br>";
  }
  foreach ($honap_nap as $h => $n) {
     print "$h: $n<br>";   
  }
  
  
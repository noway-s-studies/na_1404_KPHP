$n31 = array(1,3,5,7,8,10,12);
  $n30 = array(4,6,9,11);
  if(in_array($honap, $n31)) $nap = 31;
  if(in_array($honap, $n30)) $nap = 30;
  if($honap == 2) $nap = 28;
  print "napok szama=$nap<br>";
  
  $honap_nap = array(1=>31, 2=>28, 3=>31, 4=>30, 5=>31, 6=>30, 
                     7=>31, 8=>31, 9=>30, 10=>31, 11=>30, 12=>31);
  print "napok szama=$honap_nap[$honap]<br>";
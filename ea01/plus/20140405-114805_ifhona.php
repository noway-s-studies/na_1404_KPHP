if($honap == 1 || $honap == 3 ||$honap == 5 ||$honap == 7 ||$honap == 8 ||$honap == 10 || $honap == 12)
      $nap = 31;
  else 
    if($honap == 4 || $honap == 6 ||$honap == 9 ||$honap == 11 )
      $nap = 30;
    else 
      if($honap == 2) $nap = 28;
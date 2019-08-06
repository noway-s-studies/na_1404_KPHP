//$tk = new TesztKerdes("Mennyi 2+2?", "egyszeres", "matematika", 1.0);
    //$tk->Insert();
    
    $tk = TesztKerdes::GetTesztKerdes(1);
    print_r($tk);
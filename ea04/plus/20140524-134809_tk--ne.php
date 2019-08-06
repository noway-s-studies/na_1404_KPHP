$tk = new TesztKerdes("Mennyi 2+2?", "egyszeres", "matematika", 1.0);
    $tk->Insert();
    
    $tk = TesztKerdes::GetTesztKerdes(2);
    
    var_dump($tk);
    if(is_object($tk)) {
        $tk->kerdestxt="Mennyi a töketlen fecske repülési sebessége?";
        $tk->Update();
        //$tk->Delete();
    }
    
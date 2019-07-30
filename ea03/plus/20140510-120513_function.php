function IsValidUserReg() {
        $uzenet = array();
        if(strlen($this->login)<4) 
            array_push ($uzenet, create_uzi("A felhasználónév túl rövid (min. 4 karakter)!", "error"));
        if(strlen($this->nev)<5) 
            array_push ($uzenet,  create_uzi("A név túl rövid (min. 5 karakter)!", "error"));
        if(strlen($this->password)<6) 
            array_push ($uzenet,  create_uzi("A jelszó túl rövid (min. 6 karakter)!", "error"));
        if($this->password!=$this->password2) 
            array_push ($uzenet,  create_uzi("A két jelszó nem azonos!", "error"));
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL))
                array_push ($uzenet,  create_uzi("Az email cím hibás!", "error"));
        return $uzenet;
    }
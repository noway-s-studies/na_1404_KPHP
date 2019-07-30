<?php

class User {
    public $login;
    public $nev;
    public $email;
      
    private $password;
    private $password2;
    
    public function __construct($login="",$nev="",$email="") {
        $this->login=trim($login);
        $this->nev=trim($nev);
        $this->email=trim($email);
    }
    
    function SetPassword($p) {
        $this->password=trim($p);
    }
    function SetPassword2($p) {
        $this->password2=trim($p);
    }
    
    function IsValidUserReg() {
        $uzenet = array();
        if(strlen($this->login)<4) 
            array_push ($uzenet, "A felhasználónév túl rövid (min. 4 karakter)!");
        if(strlen($this->nev)<5) 
            array_push ($uzenet, "A név túl rövid (min. 5 karakter)!");
        if(strlen($this->password)<6) 
            array_push ($uzenet, "A jelszó túl rövid (min. 6 karakter)!");
        if($this->password!=$this->password2) 
            array_push ($uzenet, "A két jelszó nem azonos!");
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL))
                array_push ($uzenet, "Az email cím hibás!");
        return $uzenet;
    }
    // helyes user parameterek:
    // min 4 karakter login
    // nev min 5 karakter
    // ket password azonos, legalabb 6 karakter
    // email legyen valid
    
    
}

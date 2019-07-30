<?php

class User {
    public $login;
    public $nev;
    public $email;
      
    private $password;
    private $password2;
    
    public function __construct($login="",$nev="",$email="") {
        $this->login=$login;
        $this->nev=$nev;
        $this->email=$email;
    }
    
    function SetPassword($p) {
        $this->password=$p;
    }
    function SetPassword2($p) {
        $this->password2=$p;
    }
    
}

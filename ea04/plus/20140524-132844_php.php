<?php

class TesztKerdes {
    public $tkid = 0;
    public $kerdestxt;
    public $kerdeshtml;
    public $kerdesbin;
    public $tipus;     // egyszeres, többszörös
    public $kategoria; // angol, biológia, matematika, történelem
    public $nehezseg;
    
    public static $KerdesTipusok = array("egyszeres", "többszörös");
    public static $KerdesKategoriak = array("angol", "biológia", "matematika", "történelem");
    
    public function __construct($kerdestxt="",$tipus="",$kategoria="",$nehezseg="") {
        $this->kerdestxt=$kerdestxt;
        $this->tipus=$tipus;
        $this->kategoria=$kategoria;
        $this->nehezseg=$nehezseg;
    }
    
    // lekerdezo muveletek
    public static function GetTesztKerdes($tkid) {
        global $db;
        $stmt=$db->prepare("select * from tesztkerdesek where tkid = ?");
        $stmt->execute(array($tkid));
        // ???? objektumot
        $row = $stmt->fetch();
        return $row;
    }
    
    
    // CRUD (create, update, delete)
    
    public function Insert() {
        global $db;
        $stmt = $db->prepare("insert into tesztkerdesek (kerdestxt, kerdeshtml, kerdesbin, tipus, kategoria, nehezseg) values (?,?,?,?,?,?)");
        $stmt->execute(array($this->kerdestxt,$this->kerdeshtml,$this->kerdesbin,$this->tipus,$this->kategoria,$this->nehezseg));
    }
    public function Update() {
        global $db;
        $stmt = $db->prepare("update tesztkerdesek set kerdestxt=?, kerdeshtml=?, kerdesbin=?, tipus=?, kategoria=?, nehezseg=? where tkid = ?");
        $stmt->execute(array($this->kerdestxt,$this->kerdeshtml,$this->kerdesbin,$this->tipus,$this->kategoria,$this->nehezseg,$this->tkid));
    }
    public function Delete() {
        global $db;
        $stmt = $db->prepare("delete from tesztkerdesek where tkid=?");
        $stmt->execute(array($this->tkid));
    }
    
}

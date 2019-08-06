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
        $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "TesztKerdes");
        $row = $stmt->fetch();
        return $row;
    }
    
    public static function GetTesztKerdesek() {
        global $db;
        $stmt=$db->prepare("select * from tesztkerdesek");
        $stmt->execute(array());
        $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "TesztKerdes");
        $rows = $stmt->fetchAll();
        return $rows;
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
    
    public static function TesztKerdesForm($isposted=false, $tkid=0,$kerdestxt="",$tipus="",$kategoria="",$nehezseg="") {
        $uzenet=array();
        $iserror=false;
        
        $tk = new TesztKerdes($kerdestxt, $tipus, $kategoria, $nehezseg);
        $tk->tkid=$tkid;
        
        if($isposted) {
            if(strlen($kerdestxt)==0)
                $uzenet[]=create_uzi ("Hiányzó tesztkérdés", "error");
            
            if(count($uzenet)==0) {
                if($tkid==0) {
                    $tk->Insert();
                    $uzenet[]=create_uzi ("Sikeres felvitel", "accept");
                } else {
                    $tk->Update();
                    $uzenet[]=create_uzi ("Sikeres módosítás", "accept");
                }
            } else $iserror=true;
        }
        
        print '<head><meta charset="UTF-8" /></head>';
        print "<div id='tesztkerdesform'>";
        foreach ($uzenet as $uzi) {
            print $uzi;
        }
        if(!$isposted || $iserror) {
            print "<form action='#' method='post'>";
            print "<input type='hidden' name='tkid' id='tkid' value='$tkid' >";
            print "<table border='4'>";
            print "<tr>";
            print "    <td>Kérdés</td>";
            print "    <td><input class='editmezo' type='text' name='kerdestxt' id='kerdestxt' value='' /></td>";
            print "</tr>";
            
            print "<tr>";
            print "    <td>Típus</td>";
            print "    <td>";
            print "<select class='editmezo' name='tipus' id='tipus' >";
            foreach (self::$KerdesTipusok as $kt) {
                print "<option value='$kt'>$kt";
            }
            print "</select>";
            print "    </td>";
            print "</tr>";
            
            print "<tr>";
            print "    <td>Kategória</td>";
            print "    <td>";
            print "<select class='editmezo' name='kategoria' id='kategoria' >";
            foreach (self::$KerdesKategoriak as $kk) {
                print "<option value='$kk'>$kk";
            }
            print "</select>";
            print "    </td>";
            print "</tr>";
            
            print "<tr>";
            print "    <td>Nehézség</td>";
            print "    <td><input class='editmezo' type='text' name='nehezseg' id='nehezseg' value='' /></td>";
            print "</tr>";
            print "<tr>";
            print "    <td colspan='2' align='center'><input type='button' name='elkuld' id='elkuld' value='Mentés' onClick='Save_TesztKerdesForm();' /></td>";
            print "</tr>";
            print "</table>";
            print "</form>";
        }
        print "</div>";
    }
    
    public static function OsszesTesztKerdesForm() {
        
        print '<head><meta charset="UTF-8" /></head>';
        print "<div id='osszestesztkerdesform'>";
        print "<table border='4'>";
        print "<tr>";
        print "    <th>tkid</th>";
        print "    <th>kerdestxt</th>";
        print "    <th>tipus</th>";
        print "    <th>kategoria</th>";
        print "    <th>nehezseg</th>";
        print "</tr>";        
        foreach (self::GetTesztKerdesek() as $tk) {
            print "<tr>";
            print "    <td>$tk->tkid</td>";
            print "    <td><a href='#' onClick='Load_TesztKerdesForm($tk->tkid)'> $tk->kerdestxt</a></td>";
            print "    <td>$tk->tipus</td>";
            print "    <td>$tk->kategoria</td>";
            print "    <td>$tk->nehezseg</td>";
            print "</tr>";
        }
        print "</table>";
        print "</div>";
        
    }
    
}

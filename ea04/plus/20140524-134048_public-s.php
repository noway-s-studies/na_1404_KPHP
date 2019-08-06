 public static function GetTesztKerdesek() {
        global $db;
        $stmt=$db->prepare("select * from tesztkerdesek");
        $stmt->execute(array());
        $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "TesztKerdes");
        $rows = $stmt->fetchAll();
        return $rows;
    }
public static function TesztKerdesForm($isposted=false, $tkid=0,$kerdestext="",$tipus="",$kategoria="",$nehezseg="") {
        
        
        
        print '<head><meta charset="UTF-8" /></head>';
        print "<div id='tesztkerdesform'>";
        foreach ($uzenet as $uzi) {
            print $uzi;
        }
        if(!$isposted || $iserror) {
            print "<form action='#' method='post'>";
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
            print "<select class='editmezo' name='kategoria' id='katagoria' >";
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
    
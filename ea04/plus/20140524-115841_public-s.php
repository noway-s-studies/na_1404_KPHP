public static function ChangePasswordForm($isposted=false, $oldpassword="", $password="", $password2="") {
        $uzenet=array();
        $iserror=false;
        if($isposted) {
            $trylogin = User::TryLogin($_SESSION["user"]->login, $oldpassword);
            if(is_object($trylogin)) {
                if(strlen($password)<6) 
                    array_push ($uzenet,  create_uzi("A jelszó túl rövid (min. 6 karakter)!", "error"));
                if($password!=$password2) 
                    array_push ($uzenet,  create_uzi("A két jelszó nem azonos!", "error"));
            } else {
                $uzenet[]=  create_uzi($trylogin, "error");
            }
            if(count($uzenet)==0) {
                global $db;
                if(false) { $db = new PDO(); }
                $stmt = $db->prepare("update users set password = ? where login = ?");
                $stmt->execute(array($password, $_SESSION["user"]->login));
                $uzenet[]=  create_uzi("Sikeres módosítás", "accept");
            } else $iserror=true;
        }
        
        print '<head><meta charset="UTF-8" /></head>';
        print "<div id='changepasswordform'>";
        foreach ($uzenet as $uzi) {
            print $uzi;
        }
        if(!$isposted || $iserror) {
            print "<form action='#' method='post'>";
            print "<table border='4'>";
            print "<tr>";
            print "    <td>Eredeti jelszó</td>";
            print "    <td><input type='password' name='oldpassword' id='oldpassword' value='' /></td>";
            print "</tr>";
            print "<tr>";
            print "    <td>Jelszó</td>";
            print "    <td><input type='password' name='password' id='password' value='' /></td>";
            print "</tr>";
            print "<tr>";
            print "    <td>Jelszó mégegyszer</td>";
            print "    <td><input type='password' name='password2' id='password2' value='' /></td>";
            print "</tr>";
            print "<tr>";
            print "    <td colspan='2' align='center'><input type='submit' name='elkuld' id='elkuld' value='Módosít' onClick='Save_ChangePasswordForm(); return false;' /></td>";
            print "</tr>";
            print "</table>";
            print "</form>";
        }
        print "</div>";
        
    }
    
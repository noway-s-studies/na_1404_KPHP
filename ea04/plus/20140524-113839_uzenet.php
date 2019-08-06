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
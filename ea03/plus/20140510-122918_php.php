<?php
    include_once 'inc/init.php';

    // ide jon a jogosultsagkezeles (lapszintu)
    // validalas
    
    $user = new User();
    if(isset($_POST['elkuld'])) {
        $user->login=trim($_POST['login']);
        $user->nev=trim($_POST['nev']);
        $user->email=trim($_POST['email']);
        $user->SetPassword(trim($_POST['password']));
        $user->SetPassword2(trim($_POST['password2']));
        
        $uzenet = $user->IsValidUserReg();
        if(count($uzenet)>0) {
            // hibas reg
        } else {
            // minden ok
            $user->Insert();
            
        }
        
        
        
    }
    
   

    include_once 'inc/head.php';
?>
<script type="text/javascript">
    jQuery().ready(
        function() { }
    )
</script>
<title>Regisztráció</title>
<?php
    include_once 'inc/header.php';
    include_once 'inc/menu.php';
?>
<div id="middle">
    <H1>Regisztráció</H1>
<?php
    if(isset($uzenet) && is_array($uzenet)) {
        foreach ($uzenet as $uzi) {
            print $uzi;
        }
    }
?>
    <form action="register.php" method="post">
        <table border="4">
            <tr>
                <td>Felhasználói név</td>
                <td><input type='text' name='login' id='login' value='' /></td>
            </tr>
            <tr>
                <td>Jelszó</td>
                <td><input type='password' name='password' id='password' value='' /></td>
            </tr>
            <tr>
                <td>Jelszó mégegyszer</td>
                <td><input type='password' name='password2' id='password2' value='' /></td>
            </tr>
            <tr>
                <td>Név</td>
                <td><input type="text" name="nev" id="nev" value='' /></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" id="email" value='' /></td>
            </tr>
            <tr>
                <td colspan='2' align='center'><input type="submit" name="elkuld" id="elkuld" value='Regisztrálok' /></td>
            </tr>
        </table>
    </form>
</div>
<?php
    include_once 'inc/footer.php';
?>
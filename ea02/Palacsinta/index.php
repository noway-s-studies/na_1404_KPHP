<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $valami=123;
            
            function fg() {
                global $valami; // ettol latszik fg belul a global valtozo
                print "fg belul valami = $valami<br>";
            }
            fg();
            
            include_once 'common.php';
        ?>        
        <form action="megrendeles.php" method="POST">
            Nev: <input type="text" name="nev" id="nev" /><br />
            Cim: <input type="text" name="cim" id="cim" /><br />
            Palacsintak:<br />
            <select multiple name="palacsinta[]" id="palacsinta" size="<?php $valami=666; print count($palacsintak)+1; ?>">
                <?php
                    foreach ($palacsintak as $p => $ar) {
                        print "<option value='$p'>$p - $ar Ft</option>";
                    }
                ?>
            </select>
            <br />
            Extrak:<br />
                <?php
                    foreach ($extrak as $p => $ar) {
                        print "$p ($ar Ft): <input type='checkbox' name='$p' value='$p'><br />";
                    }
                ?>
            megjegyzes:<br />
            <textarea name="megjegyzes" id="megjegyzes" cols="30" rows="5">
            </textarea><br />
            <input type="submit" value="elkuld" />
            <?php print "valami=$valami"; ?>
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>

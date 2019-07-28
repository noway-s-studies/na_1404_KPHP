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
        <form action="megrendeles.php" method="POST">
            Nev: <input type="text" name="nev" id="nev" /><br />
            Cim: <input type="text" name="cim" id="cim" /><br />
            Palacsintak:<br />
            <select multiple name="palacsinta[]" id="palacsinta">
                <option value="kakaos">kakaos</option> 
                <option value="lekvaros">lekvaros</option> 
                <option value="turos">turos</option> 
                <option value="pudingos">pudingos</option>                 
            </select>
            <br />
            Extrak:<br />
            tejszinhab: <input type="checkbox" name="tejszinhab" value="tejszinhab" /><br />
            meggy: <input type="checkbox" name="meggy" value="meggy" /><br />
            porcukor: <input type="checkbox" name="porcukor" value="porcukor" /><br />
            megjegyzes:<br />
            <textarea name="megjegyzes" id="megjegyzes" cols="30" rows="5">
            </textarea><br />
            <input type="submit" value="elkuld" />
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>

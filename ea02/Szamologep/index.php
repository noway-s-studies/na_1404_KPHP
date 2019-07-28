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
        <h2>GET form</h2>
        <form action="szamol.php" method="GET">
            A=<input type="text" name="a" id="a" value="" /><br />
            B=<input type="text" name="b" id="b" value="" /><br />
            <input type="submit" name="muvelet" value="+" />
            <input type="submit" name="muvelet" value="-" />
            <input type="submit" name="muvelet" value="*" />
            <input type="submit" name="muvelet" value="/" />
        </form>
        
        <h2>POST form</h2>
        <form action="szamol.php" method="POST">
            A=<input type="text" name="a" id="a" value="" /><br />
            B=<input type="text" name="b" id="b" value="" /><br />
            <input type="submit" name="muvelet" value="+" />
            <input type="submit" name="muvelet" value="-" />
            <input type="submit" name="muvelet" value="*" />
            <input type="submit" name="muvelet" value="/" />
        </form>
        
        <?php
        
        
        ?>
    </body>
</html>

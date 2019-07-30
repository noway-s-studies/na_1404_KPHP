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
            include_once './Controls.php';
            $c = new Control("valami");
            $tc = new TextControl("textcontrol1");
            $tc->Class="valami";
            
            print $tc;
            $tc->Render();
            
            $b = new Button("gomb1", "Gomb");
            $b->Render();
            print "<hr>";
            $cb = new CheckBox("cb1", "Kér-e hírlevelet?");
            $cb->Render();
            
            $t = new Table("table1","Táblázat",3,3);
            $t->AddControl(0, 0, $tc);
            $t->AddControl(1, 1, $b);
            $t->AddControl(2, 2, $cb);
            print_r($t->Cellak);
            $t->Render();
        
        ?>
    </body>
</html>

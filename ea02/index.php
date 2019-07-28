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
        // put your code here
        
        $a = array("öreg", "édes", "álmos", "alma", "gránát" ,"zebra");
        print_r($a); print "<br>";
        sort($a);
        print_r($a); print "<br>";
        
        $col = new Collator("hu_HU");  // en_US, es_ME
        $col->sort($a);
        print_r($a); print "<br>";
        
        $a = array("tv" => 150000, "laptop" => 90000);
        print_r(array_values($a)); print "<br>";
        print_r(array_keys($a)); print "<br>";
        print "<hr>";
        
        
        $a = array(3,5,6,3,2,3,6,3);
        print_r(array_unique($a)); print "<br>";
        
        $b = array(3,5,7,9,2,3,7,8);
        print_r(array_intersect($b, $a)); print "<br>";
        print_r(array_diff($a, $b)); print "<br>";
        
        if(in_array(7, $a)) print "benne van 7"; else print "nincs benne 7";
        print "<br>";
        if(in_array(6, $a)) print "benne van 6"; else print "nincs benne 6";
        print "<br>";
        print "hol: ".array_search(6, $a)."<br>";
        
        // osszeadas
        print_r( array_merge( array(1,2,3,6,7),array(6,7,8) ) );
        print "<br>";
        
        // ???
        print_r (array(1,2,3,6,7) + array(6,7,8));
        
        print implode( ",", array(1,2,3,6,7));
        print "<br>";
        // select * from id IN (1,3,5,8)
        
        // array_push  - array_shift
        // array_pop   - array_unshift
        /*
        array_sum
        array_product
        array_reverse
        */
        ?>
    </body>
</html>

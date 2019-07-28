<?php

if(isset($_GET["a"])) $p = $_GET; else $p = $_POST;

if(isset($p["a"]) && isset($p["b"]) && isset($p["muvelet"])) {
    $a = $p["a"];
    $b = $p["b"];
    $m = $p["muvelet"];

    if(is_numeric($a) && is_numeric($b)) {
        print "a=$a<br>";
        print "b=$b<br>";

        switch($m) {
            case "+": $e = $a+$b; break;
            case "-": $e = $a-$b; break;
            case "*": $e = $a*$b; break;
            case "/": if($b==0) 
                          $e="nem lehet nullaval osztani"; 
                      else 
                          $e = $a/$b; 
                      break;
            default : $e = "hibas muvelet";
        }
        print "$a $m $b = $e";
    } else {
        print "nem szam!";
    }
} else {
    print "ejnye bejnye!";
}

print "<hr /><a href='index.php'>Uj szamolas</a>";
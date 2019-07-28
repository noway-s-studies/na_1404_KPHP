<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if(isset($_POST["csapatok"]) && isset($_POST["darab"])) {
            $cs = $_POST["csapatok"];
            $cs = explode(",", $cs);
            $darab = $_POST["darab"];
           
            
            // szokozok
            // vegen plusz vesszo => ures elem
            /*for ($index = 0; $index < count($cs); $index++) {
                $cs[$index]=trim($cs[$index]);
            }*/
            function sajattrim(&$ertek, $kulcs) { $ertek=trim($ertek); /* print "$kulcs $ertek <br>"; */ };
            array_walk($cs, "sajattrim");
            //print_r($cs);
            // kidobalni az ures elemeket
            
            //function nemures($s) { return $s!=""; };
            //$cs = array_filter($cs, "nemures");
            
            $cs = array_filter($cs, function($s) { return $s!=""; });
            print_r($cs);
            
            shuffle($cs);
            $sorsolas = array_chunk($cs, $darab);
            print "<hr>";
            print_r($sorsolas);
            
            for($i=0;$i<count($sorsolas);$i++) {
                print "<table border=1><tr>";
                for($j=0;$j<count($sorsolas[$i]);$j++) {
                    print "<th>".$sorsolas[$i][$j]."</th>";
                }
                print "</tr></table><br>";
            }
            
            
        } else {
            print "Hiba: nem megfelelő adatok!";
        }
        ?>
    </body>
</html>

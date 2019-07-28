<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <?php

    /*
    foreach($_POST as $key => $value ) {
        print "$key => $value<br>";
    }
    print "<hr/>";
    */
    // ez az egysoros komment

    include_once 'common.php';
    
    print "<h2>Kedves ".$_POST['nev']."!</h2>";
    print "A rendeleset rogzitettuk!<br>";
    print "Megrendelt palacsintak:<br>";
    if(isset($_POST['palacsinta'])) {
        //print_r($_POST['palacsinta']);
        $osszar = 0;
        print "<ul>";
        foreach ($_POST['palacsinta'] as $value) {
            print "<li>$value Ara: ".$palacsintak[$value]." Ft";
            $osszar+=$palacsintak[$value];
        }
        print "</ul>";
    }

    foreach ($extrak as $ext => $ar) {
        if(isset($_POST[$ext])) {
            print "Extra: $ext Ara: $ar Ft<br />";
            $osszar+=$ar;
        }
    }
    
    print "Osszesen: $osszar Ft<br>";
    
    ?>
    </body>
</html>

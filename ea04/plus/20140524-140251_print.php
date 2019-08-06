print "<tr>";
            print "    <td>Típus</td>";
            print "    <td>";
            print "<select name='tipus' id='tipus' >";
            foreach (self::$KerdesTipusok as $kt) {
                print "<option value='$tk'>$tk";
            }
            print "</select>";
            print "    </td>";
            print "</tr>";
            
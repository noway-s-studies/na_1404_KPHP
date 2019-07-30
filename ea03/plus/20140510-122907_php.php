<?php

// error, warning, accept
function create_uzi($szoveg, $tipus = "warning") {
    return "<div class='$tipus'>$szoveg</div>";
}
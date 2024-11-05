<?php

include "./../facile_flag.php";

$flag_osint = isset($_POST['inputflag_osint']) ? $_POST['inputflag_osint'] : '';
if ($flag_osint === FLAG_OSINT) {
    echo "Bravoo!";
} else {
    echo "Try harder!";
}
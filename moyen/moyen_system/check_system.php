<?php

include "./../moyen_flag.php";

$flag_system = isset($_POST['inputflag_system']) ? $_POST['inputflag_system'] : '';
if ($flag_system === FLAG_SYSTEM) {
    echo "Bravoo!";
} else {
    echo "Try harder!";
}
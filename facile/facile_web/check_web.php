<?php

include "./../facile_flag.php";

$flag_web = isset($_POST['inputflag_web']) ? $_POST['inputflag_web'] : '';
if ($flag_web === FLAG_WEB) {
    echo "Bravoo!";
} else {
    echo "Try harder!";
}
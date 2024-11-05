<?php

include "./difficile_flag.php";

$flag_difficile = isset($_POST['inputflag_difficile']) ? $_POST['inputflag_difficile'] : '';
if ($flag_difficile === FLAG_HARD) {
    echo "Bravoo!";
} else {
    echo "Try harder!";
}
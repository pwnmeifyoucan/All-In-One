<?php

include "./../moyen_flag.php";

$flag_crypto = isset($_POST['inputflag_crypto']) ? $_POST['inputflag_crypto'] : '';
if (trim($flag_crypto) === FLAG_CRYPT) {
    echo "Bravoo!";
} else {
    echo "Try harder!";
}
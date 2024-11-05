<?php

require "./../config.php";

$server_name = DB_HOST;
$username = DB_USERNAME;
$password = DB_PASSWORD;
$db_name = DB_NAME;
$table_name = TABLE_NAME;

try {
    $db = new PDO("mysql:host=$server_name;dbname=$db_name", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connexion à bdd faible : " . $e->getMessage();
    exit();
}

if (isset($_POST['login'])) {
    $usr = $_POST['nom'];
    $pwd = $_POST['mdp'];

    if (!empty($usr) && !empty($pwd)) {
        $req = $db->query("SELECT * FROM $table_name WHERE nom = '$usr' AND pass = '" . md5($pwd) . "'");

        if ($req->rowCount() > 0) {
            session_start();
            $user = $req->fetch(PDO::FETCH_ASSOC);
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['nom'];
            header("Location: ./dashboard.php");
            exit();
        } else {
            echo "Invalid credentials.";
        }
    } else {
        echo "Please fill all fields.";
    }
}

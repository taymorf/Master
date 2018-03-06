<?php

function connect() {
    $host = 'localhost';      // min host.
    $user = 'root';           // mit brugernavn.
    $password = 'mysql';      // mit password. Er tomt for Windows-brugere, men root for Mac-brugere.
    $database = 'modul';      // navnet p� min database.
    $conn = new mysqli($host, $user, $password, $database);

    if (!$conn) {
        die($conn->connect_error);
    }
    return $conn;
}

?>

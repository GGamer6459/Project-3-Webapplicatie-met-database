<?php
// Auteur: Matin Arja
// Initialisatie
require_once "conn.php";

$username = $_POST['username'];
$password = $_POST['password'];

// Main

// Validatie username > 3 tekens en < 50 tekens
$username_len = strlen($username);

if ($username_len > 3 && $username_len < 50) {
    // Zoek username op in de database
    $sql = "SELECT * FROM user WHERE username = ?";
    $query = $conn->prepare($sql);
    $query->execute(array($username));

    $data = $query->fetch();

    // Checken of de username gevonden is
    if ($data) {
        
        echo "Gebruikersnaam is al in gebruik.";
    }
    else {
        echo "U bent geregistreerd.";
        // Manier 1
    /*  $sql = "INSERT INTO user VALUES (:username, :password)";
        $query = $conn->prepare($sql);
        $query->bindParam(':username', $username);
        $query->bindParam(':password', $password);
        $query->execute(); */

        // Manier 2
        $sql = "INSERT INTO user VALUES (?, ?)";
        $query = $conn->prepare($sql);
        $query->execute(array($username, $password));
    }
}
else {
    echo "not ok";
}
?>
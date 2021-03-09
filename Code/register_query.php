<?php
// Auteur: Matin Arja
// Initialisatie
$username = $_POST['username'];
$password = $_POST['password'];

// Main

// Validatie username > 3 tekens en < 50 tekens
if (strlen($username) > 3 && strlen($username) < 50) {
    echo "ok";
}
else {
    echo "not ok";
}

?>
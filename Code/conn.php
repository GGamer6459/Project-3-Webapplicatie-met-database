<?php 
$servername = "localhost";
$dbname = "login";
$username = "root";
$password = "";
 
try {
    $conn = new PDO ("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Database verbonden!<br/>";
}
catch (PDOException $e) {
    echo "Connectie mislukt.<br/>" . $e->getMessage();
}
?>
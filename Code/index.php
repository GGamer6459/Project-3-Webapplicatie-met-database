<?php

session_start();

if(isset($_SESSION['username'])) {
echo "Welkom".$_SESSION['username']."!<br>";
echo '<br><button><a href="logout.php">Logout</a></button>';
} 

else {
echo "Inloggen is mislukt.";
echo '<br><button><a href="login.php">Logout</a></button>';
}
?>
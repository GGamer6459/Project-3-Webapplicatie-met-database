<?php

session_start();

if(isset($_SESSION['username'])) {
echo "U bent ingelogd, ".$_SESSION['username'].".<br>";
echo '<br><button><a href="logout.php">Logout</a></button>';
} 

else {
echo "U bent niet ingelogd.<br>";
echo '<br><button><a href="login.php">Login</a></button>';
}
?>
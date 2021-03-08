<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>login_query.php</title>
</head>

<body>
<?php
$username = $_POST['username'];
$password = $_POST['password'];

echo "Gebruikersnaam: ".$username."<br>";
echo "Wachtwoord: ".$password;

if ($username == "" || $password == "") {
    echo "<script>alert('Vul uw gebruikersnaam en wachtwoord in.') window.location = 'login.php'</script>";
}
else {
    require_once "conn.php";

    $sql = "SELECT * FROM user WHERE username = :username AND password = :password";
    $query = $conn->prepare($query);
    $query->execute(["username"->$username,"password"->$password]);
    echo $query->debugDumpParams();

    $data = $query->fetch();

    if ($data) {
    session_start();
    $_SESSION['user'] = $data['username'];
    echo "<script>alert('Welkom ".$_SESSION['user']."!') window.location = 'login.php'</script>";
    }
    else {
    echo "<script>alert('Login is mislukt.') window.location = 'login.php'</script>";
    }
}
?>
</body>

</html>
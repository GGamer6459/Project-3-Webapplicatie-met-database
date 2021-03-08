<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, intial-sclae=1.0" />
    <meta name="author" content="Matin Arja" />
    <title>login.php</title>
    <style>
        body {
            padding-top: 10px;
        }
        
        #password {
            margin-left: 20px;
        }
    </style>
</head>

<body>
    <form action="login_query.php" method="POST">
        <label for="username">Gebruikersnaam:</label>
        <input id="username" name="username" type="text" required /><br>
        <label for="password">Wachtwoord:</label>
        <input id="password" name="password" type="password" required /><br>
        <br><button name="login">Inloggen</button>
    </form>
    <button name="registration" onlick="registration.php">Registreren</button>
</body>

</html>
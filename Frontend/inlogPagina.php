<?php
SESSION_START();
include ("../Backend/DBconfig.php")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inlog</title>
    <style>
        body{
            display:flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height:100vh;
        }
        .user{
            width:100px;
        }
    </style>
</head>

<body>
<div id="container">
    <h3>Inloggen</h3>
    <form id="inlogForm" method="POST" action="../Backend/login.php">
        <div class="user">gebruiker: <input type="text" id="userField" name="userField"></div>
        <div class="user">wachtwoord: <input type="password" id="passwordField" name="passwordField"></div>
        <button type="submit" name="submit">Verzenden</button>
    </form>
    <a href="registreerPagina.php">Registreren</a>
</div>
</body>

</html>
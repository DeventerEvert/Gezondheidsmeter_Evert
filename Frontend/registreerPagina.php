<?php
SESSION_START();
include ("../Backend/DBconfig.php")
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registreer</title>
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
    <h3>Registreren</h3>
    <form id="inlogForm" method="POST" action="../Backend/registreren.php">
    <div class="user">gebruiker: <input type="text" id="userField" name="userField"></div>
    <div class="user">wachtwoord: <input type="password" id="passwordField" name="passwordField"></div>
        <button type="submit" name="submit">Verzenden</button>
    </form>
    <a href="inlogPagina.php">Inloggen</a>
    </div>
</body>

</html>
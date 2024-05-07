<?php
include_once ("DBconfig.php");
session_start();

if (isset($_POST['submit'])) {
    $username = htmlspecialchars($_POST['userField']);
    $password = htmlspecialchars($_POST['passwordField']);
    echo $username;
    echo $password;
}
try {
    $sql = "SELECT * FROM accounts WHERE username = ?";
    $stmt = $verbinding->prepare($sql);
    $stmt->execute(array($username));
    $resultaat = $stmt->fetch(PDO::FETCH_ASSOC);
    var_dump($resultaat);
    if ($resultaat) {
        $naamInDatabase = $resultaat["username"];
        $wachtwoordInDatabase = $resultaat["password"];
        if (password_verify($password, $wachtwoordInDatabase)) {
            $_SESSION["accountId"] = session_id();
            $_SESSION["Gebruikersnaam"] = $resultaat["username"];
            $_SESSION["STATUS"] = "ACTIEF";
            header("location: ../php_frontend/welkomPagina.php");
            exit();
        } else {
            echo "Wachtwoord of e-mailadres is onjuist1";
            //header("location: ../Index.php");
        }
    } else {
        echo "Wachtwoord of e-mailadres is onjuist2";
        //header("location: ../Index.php");
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}


?>
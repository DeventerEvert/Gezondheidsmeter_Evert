<?php
include_once ("DBconfig.php");
session_start();

if (isset($_POST['submit'])) {
    $username = htmlspecialchars($_POST['userField']);
    $password = htmlspecialchars($_POST['passwordField']);
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
}

try {
    $sql = "INSERT INTO accounts (username, password) VALUES (?, ?)";
    $stmt = $verbinding->prepare($sql);
    $stmt->execute([$username, $passwordHash]); 
    $rowCount = $stmt->rowCount(); 

    if ($rowCount > 0) {
        echo "Succesvol geregistreerd!";
        header("location: backend.php");
        exit();
    } else {
        echo "Registratie gefaald, probeer opnieuw";
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>

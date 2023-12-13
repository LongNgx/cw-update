<?php
include "../include/DatabaseConnection.php";

try {
    
    $name = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $checkPassword = $_POST["checkPassword"];

    function confirmPassword($password, $confirmPassword) {
        return $password === $confirmPassword;
    }
    if (!confirmPassword($password, $checkPassword)) {
        echo "Error: Passwords do not match.";
        exit();
    }
    
    $hashed_password = md5($password);

        $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
        $stmt->bindValue(':username', $name);
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':password', $hashed_password);
        $stmt->execute();
       
        header("Location: login.html.php");
        }
    
 catch (Exception $e) {
    echo "Error: ". $e->getMessage() ."";
}
?>          



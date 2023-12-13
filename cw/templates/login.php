<?php
include "../include/DatabaseConnection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $loginUsernameOrEmail = $_POST["loginUsernameOrEmail"];
    $loginPassword = $_POST["loginPassword"];
    $hashed_login_password = md5($loginPassword);

    try {
        $stmt = $pdo->prepare("SELECT * FROM users WHERE (username = :loginUsernameOrEmail OR email = :loginUsernameOrEmail) AND password = :hashed_login_password");
        $stmt->bindValue(':loginUsernameOrEmail', $loginUsernameOrEmail);
        $stmt->bindValue(':hashed_login_password', $hashed_login_password);
        $stmt->execute();

        if ($stmt->rowCount() == 1) {
            // Login successful
            header("Location: home.html.php");
            exit(); 
        } else {
            //Login failed
            header("Location: login.html.php");
            
        }
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>

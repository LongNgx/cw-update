<?php
include "../include/DatabaseConnection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (isset($_POST["id"]) && isset($_POST["modules"]) && isset($_POST["content"])) {
        $postId = $_POST["id"];
        $modules = htmlspecialchars($_POST["modules"]);
        $content = htmlspecialchars($_POST["content"]);

        // Prepare and execute the SQL UPDATE statement
        $stmt = $pdo->prepare("UPDATE posts SET modules = :modules, content = :content WHERE post_id = :post_id");
        $stmt->bindParam(':post_id', $postId);
        $stmt->bindParam(':modules', $modules); 
        $stmt->bindParam(':content', $content);
        $stmt->execute();

        // Redirect back to the forum after updating
        header("Location: forum.html.php");
        exit();
    } else {
        // Invalid form submission
        echo "Invalid form submission.";
    }
} else {
    // Invalid request method
    echo "Invalid request method.";
}

// Close the database connection
$pdo = null;
?>

<?php
include "../include/DatabaseConnection.php";
try {
   
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $modules = htmlspecialchars($_POST["modules"]);
        $content = htmlspecialchars($_POST["content"]);
        $author = htmlspecialchars($_POST["author"]);

        //upload image files
        include"../templates/uploadimage.php";
        
        // Insert the data into the 'posts' table
        $sql = "INSERT INTO posts (modules, content, author, image, created_at) VALUES (:modules, :content, :author, :image, NOW())";

        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':modules', $modules);
        $stmt->bindParam(':content', $content);
        $stmt->bindParam(':author', $author);
        $stmt->bindParam(':image', $targetFile);

        // Execute the statement
        $stmt->execute();

        // Redirect to the forum page
        header("Location: forum.html.php");
        exit();
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Close the database connection
$pdo = null;
?>

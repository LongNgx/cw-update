<?php
include "../include/DatabaseConnection.php";

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $postId = $_GET["id"];

    // Delete the post based on the ID
    $stmt = $pdo->prepare("DELETE FROM posts WHERE post_id = :post_id");
    $stmt->bindParam(':post_id', $postId);
    $stmt->execute();

    // Redirect back to the forum after deletion
    header("Location: forum.html.php");
    exit();
} else {
    // Invalid request
    echo "Invalid request.";
}

// Close the database connection
$pdo = null;
?>

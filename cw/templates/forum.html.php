<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="forum.css">
    <title>Forum</title>
</head>

<body>
    <div class="container">
        <h2>Forum</h2>

        <?php
        include "../include/DatabaseConnection.php";

        try {
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Fetch posts from the 'posts' table, ordered by created_at in descending order
            $stmt = $pdo->query("SELECT * FROM posts ORDER BY created_at DESC");

            // Display each post
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<div class='post'>";
                echo "<h3>{$row['modules']}</h3>"; // Change to 'modules' column
                echo "<p>{$row['content']}</p>";
                echo "<p><strong>Author:</strong> {$row['author']}</p>";
                echo "<p><strong>Created At:</strong> {$row['created_at']}</p>";

                // Check if the post has an associated image
                if (!empty($row['image'])) {
                    $imagePath = htmlspecialchars($row['image']);
                    echo "<img src= ../" . $imagePath . " alt=\"Post Image\">";
                } else {
                    echo "<p>No image available</p>";
                }

                // Edit and delete links
                echo "<div class='edit-delete-buttons'>";
                echo "<p><a href='editquestions.php?id={$row['post_id']}'>Edit</a></p>";
                echo "<p><a href='deletequestions.php?id={$row['post_id']}'>Delete</a></p>";
                echo "</div>";

                echo "</div>";
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

        // Close the database connection
        $pdo = null;
        ?>
    </div>
</body>

</html>

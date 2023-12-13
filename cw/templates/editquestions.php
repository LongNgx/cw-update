<?php
include "../include/DatabaseConnection.php";

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $postId = $_GET["id"];

    // Fetch the post based on the ID
    $stmt = $pdo->prepare("SELECT * FROM posts WHERE post_id = :post_id");
    $stmt->bindParam(':post_id', $postId);
    $stmt->execute();
    $post = $stmt->fetch(PDO::FETCH_ASSOC);

    // Display the form for editing the post
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="editpost.css"> 
        <title>Edit Post</title>
    </head>
    <body>
        <div class="container">
            <h2>Edit Post</h2>
            <form action="update_post.php" method="post">
                <input type="hidden" name="id" value="<?php echo $post['post_id']; ?>">
                <label for="modules">Select Modules:</label>
                <select name="modules" required>
                    <option value="Design" <?php echo ($post['modules'] == 'Design') ? 'selected' : ''; ?>>Design</option>
                    <option value="Information Technology" <?php echo ($post['modules'] == 'Information Technology') ? 'selected' : ''; ?>>Information Technology</option>
                    <option value="Business" <?php echo ($post['modules'] == 'Business') ? 'selected' : ''; ?>>Business</option>
                    <option value="Math" <?php echo ($post['modules'] == 'Math') ? 'selected' : ''; ?>>Math</option>
                </select><br>
                <label for="content">Content:</label>
                <textarea id="content" name="content" required><?php echo $post['content']; ?></textarea>
                <input type="submit" value="Update Post">
            </form>
        </div>
    </body>
    </html>
    <?php
} else {
    // Invalid request
    echo "Invalid request.";
}

// Close the database connection
$pdo = null;
?>

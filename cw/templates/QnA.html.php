<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Post</title>
    <link rel="stylesheet" href="QnA.css">
</head>

<body>
    <h2>Add a Question</h2>
    <form action="QnA.php" method="post" enctype="multipart/form-data">
        <select name="modules">
            <option value="">Select Modules</option>
            <option value="Design">Design</option>
            <option value="Information Technology">Information Technology</option>
            <option value="Bussiness">Bussiness</option>
            <option value="Math">Math</option>
        </select>
        <label for="content">Content:</label>
        <textarea name="content" rows="4" required></textarea><br>

        <label for="author">Author:</label>
        <input type="text" name="author" required><br>

        <label for="image">Upload Image:</label>
        <input type="file" name="image"><br>

        <input type="submit" value="Add Post">
    </form>
</body>

</html>

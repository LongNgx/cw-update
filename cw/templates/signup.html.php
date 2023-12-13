<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="signupstyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>

<body>
    <div class="wrapper">
        <form method="post" action="signup.php">
            <h1>Sign Up</h1>
            <div class="input-box">
                <input type="text" name="username" placeholder="Enter your username" required>
                <i class="bi bi-person-circle"></i>
            </div>
            <div class="input-box">
                0
                <i class="bi bi-envelope"></i>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Password" required>
                <i class="bi bi-file-lock"></i>
            </div>
            <div class="input-box">
                <input type="password" name="checkPassword" placeholder="Confirm your password" required>
                <i class="bi bi-file-lock"></i>
            </div>
                <button type="submit" class="btn">Sign Up</button>
        </form>
    </div>
</body>

</html>
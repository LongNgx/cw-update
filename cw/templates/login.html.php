<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="loginstyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>

<body>
    <div class="wrapper">
        <form action="login.php" method="post">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" name="loginUsernameOrEmail" placeholder="Enter username or email" required>
                <i class="bi bi-person-circle"></i>
            </div>
            <div class="input-box">
                <input type="password" name="loginPassword" placeholder="Password" required>
                <i class="bi bi-file-lock"></i>
            </div>
            <div class="remember-forget">
                <label><input type="checkbox">Remember Me</label>
                <a href="">Forgot Password</a>
            </div>
                <button type="submit" class="btn">Login</button>
                <div class="register-link">
                    <p>Don't have an account ? <a href="signup.html.php">Register here</a></p>
                </div>
        </form>
    </div>
</body>

</html>

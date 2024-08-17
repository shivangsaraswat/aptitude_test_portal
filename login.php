<?php

include 'process_login.php' ;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Aptitude Test Portal</title>
    <link rel="stylesheet" href="re-de-signup.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">Aptitude<span>Portal</span></div>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="signup.php">Sign Up</a></li>
            </ul>
        </nav>
    </header>

    <div class="login-container">
        <h1>Welcome Back</h1>
        <form action="process_login.php" method="POST">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" class="btn-primary">Login</button>
            <p>Don't have an account? <a href="signup.php">Sign up here</a>.</p>
        </form>
    </div>
</body>
</html>

</script>

    <script src="script.js"></script>
</body>
</html>

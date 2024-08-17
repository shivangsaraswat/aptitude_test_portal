<?php

include 'process_signup.php' ;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Aptitude Test Portal</title>
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

    <div class="signup-container">
        <h1>Create an Account</h1>
        <form action="process_signup.php"  enctype="multipart/form-data" method="POST">
            <input type="text" name="name" placeholder="Full Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <!-- <input type="tel" id="phone" name="phone" placeholder="Phone" required> -->
            <input type="tel" id="phone" name="phone" title="Enter a valid 10 digit number" maxlength="10" pattern="[6789][0-9]{9}" placeholder="Phone" required> 
            <input type="text" id="school" name="school" placeholder="School" required>
            <input type="text" id="grade" name="grade" placeholder="Grade/Class" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm Password" required>
            <label for="photo">Upload Profile Photo:</label>
            <input type="file" name="photo" id="photo" accept="image/*" required>
            <button type="submit" class="btn-primary">Sign Up</button>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
    </div>
</body>
</html>

    
    <script src="script.js"></script>
</body>
</html>

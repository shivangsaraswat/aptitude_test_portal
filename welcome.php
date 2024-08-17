<?php
// welcome.php

session_start();

// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}

// Retrieve user details from the session
$user_name = $_SESSION['name'];
$payment_status = $_SESSION['payment_status']; // Assume this is set during the login process

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - Aptitude Test Portal</title>
    <link rel="stylesheet" href="wel-styles.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">Aptitude Test Portal</div>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <section class="welcome-section">
        <div class="welcome-container">
            <h2>Welcome, <?php echo htmlspecialchars($user_name); ?>!</h2>
            <p>We're excited to have you here. Get ready to challenge yourself and discover your strengths.</p>

            <div class="exam-info">
                <h3>About the Exam</h3>
                <p>This 2-hour aptitude test is designed to assess your critical thinking, problem-solving, and analytical skills. You can take the test at your convenience, but remember, once started, the timer cannot be paused. Make sure to complete the test in one sitting for the best experience.</p>
            </div>

            <?php if ($payment_status !== 'paid'): ?>
                <p>To start your aptitude test, please complete the payment of ₹1000.</p>
                <a href="payment.html" class="btn">Pay ₹1000 </a>
            <?php else: ?>
                <p>Your payment has been received. You can now take the test.</p>
                <a href="test.html" class="btn">Start Test</a>
            <?php endif; ?>
        </div>
    </section>

    
    <footer>
        <p>&copy; 2024 Aptitude Test Portal. All rights reserved.</p>
    </footer>
</body>
</html>
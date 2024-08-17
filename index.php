<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aptitude Test Portal</title>
    <link rel="stylesheet" href="in-styles.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">Aptitude<span>Portal</span></div>
            <div class="menu-toggle" id="mobile-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <ul class="nav-links" id="nav-links">
                <li><a href="index.php">Home</a></li>
                
                <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
                    <li><a href="welcome.php"><img src="photo/user.png" alt="Profile" class="profile-icon"></a></li>
                    <li><a href="logout.php">Logout</a></li>
                <?php else: ?>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="signup.php">Sign Up</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>

    <section class="hero-section">
        <div class="hero-content">
            <h1>Discover Your Future</h1>
            <p>Take the first step towards unlocking your potential with our comprehensive aptitude test.</p>
            <?php if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true): ?>
                <a href="signup.php" class="btn-primary">Get Started</a>
            <?php endif; ?>
        </div>
    </section>

    <section class="features-section">
        <div class="features-container">
            <div class="feature-box">
                <h2>Comprehensive Test</h2>
                <p>Our test covers a wide range of topics to assess your critical thinking and problem-solving abilities.</p>
            </div>
            <div class="feature-box">
                <h2>Flexible Timing</h2>
                <p>Take the test when it suits you best, ensuring you're in the right mindset to perform.</p>
            </div>
            <div class="feature-box">
                <h2>Secure Payment</h2>
                <p>Your transactions are protected with our secure payment gateway.</p>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Aptitude Test Portal. All rights reserved.</p>
    </footer>

    <script>
        const mobileMenu = document.getElementById('mobile-menu');
        const navLinks = document.querySelector('.nav-links');

        mobileMenu.addEventListener('click', () => {
            navLinks.classList.toggle('active');
            mobileMenu.classList.toggle('active');
        });
    </script>
</body>
</html>

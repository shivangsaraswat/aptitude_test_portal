<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Confirmation - Aptitude Test Portal</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">Aptitude Test Portal</div>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="signup.html">Sign Up</a></li>
                <li><a href="login.html">Login</a></li>
            </ul>
        </nav>
    </header>

    <section class="confirmation-section">
        <div class="confirmation-container">
            <h2>Payment Successful</h2>
            <p>Thank you for your payment! Your payment ID is <span id="payment-id"></span>.</p>
            <p>You can now proceed to take the aptitude test.</p>
            <a href="test.html" class="btn">Take Test</a>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Aptitude Test Portal. All rights reserved.</p>
    </footer>
    
    <script>
        // Extract payment ID from URL
        const urlParams = new URLSearchParams(window.location.search);
        const paymentId = urlParams.get('payment_id');
        document.getElementById('payment-id').textContent = paymentId;
    </script>
</body>
</html>

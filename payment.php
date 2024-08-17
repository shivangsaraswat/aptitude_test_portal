<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aptitude Test Portal</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">Aptitude Test Portal</div>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="signup.php">Sign Up</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
    </header>

    <section class="payment-section">
        <div class="payment-container">
            <h2>Payment</h2>
            <p>You are required to pay ₹1000 to take the aptitude test.</p>
            <button id="rzp-button" class="btn">Pay ₹1000</button>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Aptitude Test Portal. All rights reserved.</p>
    </footer>
    
    <!-- Razorpay Script -->
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    
    <!-- Payment Script -->
    <script>
        const options = {
            "key": "YOUR_RAZORPAY_KEY_ID", // Enter the Key ID generated from the Razorpay Dashboard
            "amount": "100000", // Amount is in paise, so 100000 = 1000 INR
            "currency": "INR",
            "name": "Aptitude Test Portal",
            "description": "Test Fee Payment",
            "image": "https://your-logo-url.com/logo.png", // Optional: Add your logo URL
            "handler": function (response){
                // After payment, handle the response here
                alert("Payment Successful! Payment ID: " + response.razorpay_payment_id);
                window.location.href = "confirmation.html?payment_id=" + response.razorpay_payment_id;
            },
            "prefill": {
                "name": "User Name", // Optional: Prefill user's name
                "email": "user@example.com", // Optional: Prefill user's email
                "contact": "9876543210" // Optional: Prefill user's phone
            },
            "notes": {
                "address": "Test Address" // Optional: Add additional notes
            },
            "theme": {
                "color": "#007bff" // Customize the theme color
            }
        };

        const rzp1 = new Razorpay(options);

        document.getElementById('rzp-button').onclick = function(e){
            rzp1.open();
            e.preventDefault();
        }
    </script>
</body>
</html>

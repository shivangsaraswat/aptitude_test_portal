<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Successful</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
            margin: 0;
            background-color: #f0f0f0;
        }
        .success-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .success-message {
            color: #28a745;
            font-size: 24px;
            margin-bottom: 10px;
        }
        .success-details {
            color: #6c757d;
            font-size: 16px;
        }
        .btn {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 16px;
            color: white;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="success-container">
    <div class="success-message">Registration Successful!</div>
    <div class="success-details">Thank you for registering. You can now log in.</div>
    <button class="btn" onclick="goToLogin()">Go to Login</button>
</div>

<script>
    function goToLogin() {
        // Redirect to login page
        window.location.href = "login.php";
    }
</script>

</body>
</html>

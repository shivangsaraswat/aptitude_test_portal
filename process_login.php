<?php
// process_login.php
// Connect to your database
$server = "localhost";
$username = "root";
$password = "";
$database = "aptitude_test_portal";
$conn = "";

// Replace with your own database connection details

$conn = mysqli_connect($server, $username, $password, $database);

 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if the user exists
   
    $sql = "SELECT * FROM aptitude_test_portal WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
   
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
   
    if($num ==1){
       $login = true;
       session_start();
       $_SESSION['loggedin'] = true;
       $_SESSION['username'] = $username;
       $_SESSION['name'] = $row['name'];
       $_SESSION['payment_status'] = $row['payment_status']; // Assuming 'payment_status' column exists in your 'users' table
       header("Location: welcome.php");
     } 
    else {
        echo "Invalid password.";
           }
} else {
    echo "Invalid password..";
 }

             
}
   
   
   
    // $result = $conn->query($sql);


    // if ($result->num_rows > 0) {
    //     $row = $result->fetch_assoc();
    //     if (password_verify($password, $row['password'])) {
    //         echo "Login successful!";
    //         header("Location: payment.php");
    //     } else {
    //         echo "Invalid password.";
    //     }
    // } else {
    //     echo "No account found with that email.";
    //  }



$conn->close();
?>




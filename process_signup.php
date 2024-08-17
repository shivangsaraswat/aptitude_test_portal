<?php
// process_signup.php

// Connect to your database
// $_SERVER = "localhost";
// $username = "root";
// $password = "";
// $database = "aptitude_test_portal";

$server = "localhost";
$username = "root";
$password = "";
$database = "aptitude_test_portal";
$conn = "";

// Replace with your own database connection details
// $conn = new mysqli('localhost', 'root', '', 'aptitude_test_portal');
$conn = mysqli_connect($server, $username, $password, $database);

// if($conn){
//     echo "success";
// }
// else{
//     echo "could not connect";
//     // die("error" mysqli_connect_error());
// }

 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

    
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $filename = $_FILES["photo"]["name"];
    $tempname = $_FILES["photo"]["tmp_name"];
    $folder = "photo/". $filename;
    move_uploaded_file($tempname, $folder);

    // $filename = $_POST['photo'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $school = $_POST['school'];
    $grade = $_POST['grade'];
    $password = $_POST['password'];
   
    // $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password


     $sql = "INSERT INTO `aptitude_test_portal` (`photo`,`name`, `email`, `phone`, `school`, `grade`, `password`, `dt`) 
   VALUES ('$filename', '$name', '$email', '$phone', '$school', '$grade', '$password', current_timestamp())";



    // // Handle the file upload
    // $target_dir = "photo/";
    // $target_file = $target_dir . basename($_FILES["photo"]["name"]);
    // $uploadOk = 1;
    // $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
     
    


// Check if the file is an actual image
// $check = getimagesize($_FILES["photo"]["tmp_name"]);
// if ($check !== false) {
//     $uploadOk = 1;
// } else {
//     echo "File is not an image.";
//     $uploadOk = 0;
// }

// // Check file size (limit to 2MB)
// if ($_FILES["photo"]["size"] > 2000000) {
//     echo "Sorry, your file is too large.";
//     $uploadOk = 0;
// }

// // Allow only certain file formats
// if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
//     echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//     $uploadOk = 0;
// }

// // Check if $uploadOk is set to 0 by an error
// if ($uploadOk == 0) {
//     echo "Sorry, your file was not uploaded.";
// } else {
//     // If everything is ok, try to upload file
//     if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
//         // Insert user data into the database
//         $sql = "INSERT INTO users (fullname, email, password, photo) VALUES (?, ?, ?, ?)";
//         $stmt = $conn->prepare($sql);
//         $stmt->bind_param("ssss", $fullname, $email, $password, $target_file);

//         if ($stmt->execute()) {
//             echo "Sign-up successful!";
//             // Redirect or do something on success
//         } else {
//             echo "Error: " . $stmt->error;
//         }

//         $stmt->close();
//     } else {
//         echo "Sorry, there was an error uploading your file.";
//     }
// }






    if ($conn->query($sql) === TRUE) {
        echo "Sign up successful!";
        header("Location: register.php");
 
 exit;
        // Redirect to login or another page
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

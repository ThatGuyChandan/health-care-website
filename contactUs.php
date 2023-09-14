<?php
$name= $_POST["name"];
$phone=$_POST["phone"];
$email=$_POST["mail"];
$message=$_POST["message"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book_db";

/* 
if (empty($name) || empty($phone) || empty($email) || empty($message)) {
 die("Please fill in all the fields.");
 die ('<script>alert("Please fill in all the fields.")</script>');
}

// Check name starts with a capital letter
if (!preg_match('/^[A-Z]/', $name)) {
   echo '<script>alert("Name should start with a capital letter.")</script>';

}

// Check phone number contains only numbers
if (!preg_match('/^[0-9]+$/', $phone)) {
   echo '<script>alert("Phone number should contain only numbers.")</script>';

}    
*/


// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}



$sql="INSERT INTO contact1(name,phone,email,message)
VALUES(?,?,?,?)";
$stmt=mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql)){
    die(mysqli_error($conn));
}
mysqli_stmt_bind_param($stmt,"siss",
$name,$phone,$email,$message) ;
mysqli_stmt_execute($stmt);
echo ("your message sent successfully");

/* header("Location: contact.html"); */


?>
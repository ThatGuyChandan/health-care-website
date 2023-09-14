<?php
$first_name= $_POST["first-name"];
$last_name=$_POST["last-name"];
$age=$_POST["age"];
$type=$_POST["type"];
$phone=$_POST["phone"];
$email=$_POST["email"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


$sql="INSERT INTO book1(firstName,lastName,age,type,phone,email)
VALUES(?,?,?,?,?,?)";
$stmt=mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql)){
    die(mysqli_error($conn));
}
mysqli_stmt_bind_param($stmt,"ssiiis",
$first_name,$last_name,$age,$type,$phone,$email) ;
mysqli_stmt_execute($stmt);
echo "Appointement booked successfuly";
?>

	
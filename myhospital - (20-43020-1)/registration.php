<?php
error_reporting(0);
session_start();

if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    echo "<script type='text/javascript'>alert('$message');</script>";
}


$host = "localhost";
$user = "root";
$password = "";
$db = "issue";

$conn = mysqli_connect($host, $user, $password, $db);

if ($conn === false) {
    die("Connection error: " . mysqli_connect_error());
}

if (isset($_POST['apply'])) {
    
    $name =  $_POST['name'];
    $email =  $_POST['email'];
    $phone =  $_POST['phone'];
    $message = $_POST['message'];


    
    $sql = "INSERT INTO registration (name, email, phone, message) 
            VALUES ('$name', '$email', '$phone', '$message')";

$result = mysqli_query($conn, $sql);


if ($result) {
    $_SESSION['message'] = "Your application was sent successfully";
    header("location: index.php");
    exit();
 } else {
     echo "Error: " . mysqli_error($conn);
 }
}
?>

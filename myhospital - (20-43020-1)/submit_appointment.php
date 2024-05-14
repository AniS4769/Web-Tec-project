<?php
session_start();

$host = "localhost";
$user = "root"; 
$dbname = "issue";

$conn = mysqli_connect($host, $user,'',  $dbname);

if ($conn === false) {
    die("Connection error: " . mysqli_connect_error());
}

if (isset($_POST['submit']))
 { 

    $username = $_POST['username'];
    $password =$_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $reason = $_POST['reason'];

    $sql = "INSERT INTO appointments (username,password, email, phone, date, time, reason) VALUES ('$username', '$password', '$email', '$phone', '$date', '$time', '$reason')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
       $_SESSION['message'] = "Your application was sent successfully";
       header("location: appointment.php");
       exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

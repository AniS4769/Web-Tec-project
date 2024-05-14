<?php

error_reporting(0);

$host = "localhost";
$user = "root";
$password = "";
$db = "issue";

$data = mysqli_connect($host, $user, $password, $db);

if ($data === false) {
    die("Connection error: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["username"];
    $pass = $_POST["password"];

    $sql = "SELECT * FROM user WHERE username='" . $name . "' AND password='" . $pass . "'";
    $result = mysqli_query($data, $sql);
  
    if ($result) {
        $row = mysqli_fetch_array($result);
        
        if ($row) {
            if ($row["usertype"] == "patient") {
                header("location: patienthome.php");
                exit;
            } elseif ($row["usertype"] == "admin") {
                header("location: adminhome.php");
                exit;
            }
        } else {
            echo "Username or password do not match";
        }
    } else {
        echo "Error executing query: " . mysqli_error($data);
    }
}

?>

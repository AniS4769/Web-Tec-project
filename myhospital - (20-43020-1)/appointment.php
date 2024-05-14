<?php

error_reporting(0);
session_start();
session_destroy();

if($_SESSION['message'])
{
   $message=$_SESSION['message'];

   echo "<script type='text/javascript'>   
   alert('$message');
</script>";

}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Form</title>
    <link rel="stylesheet" type="text/css" href="appointment.css">
</head>
<body>
    <h1>Appointment Form</h1>

    <form action="submit_appointment.php" method="POST">

    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username" required><br>

        


        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>

        <label for="phone">Phone:</label><br>
        <input type="text" id="phone" name="phone" required><br>

        <label for="date">Preferred Date:</label><br>
        <input type="date" id="date" name="date" required><br>

        <label for="time">Preferred Time:</label><br>
        <input type="time" id="time" name="time" required><br>

        <label for="reason">Reason for Appointment:</label><br>
        <textarea id="reason" name="reason" rows="4" required></textarea><br>

        <input type="submit" name="submit" value="submit ">

    </form>
</body>
</html>

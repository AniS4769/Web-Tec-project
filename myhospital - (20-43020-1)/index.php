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
    <title>Hospital Management System</title>
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
    <nav>
        <label class="logo">My Hospital</label>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Contract</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </nav>

    <div class="section1">
        <label class="img_taxt"> We want your service</label>
        <img class="main_img" src="hospital1.jpg">
    </div>

    <div>
        <h1>WELCOME TO YOUR HOSPITAL</h1>
        <p>Nestled within the serene neighborhood of Green Valley, Green Valley Medical Center epitomizes a haven of healing amidst nature's tranquility. Our facility boasts modern amenities harmoniously blended with the warmth of personalized care. From the moment you step through our doors, our dedicated staff welcomes you with compassion and expertise, guiding you through every step of your medical journey. Whether it's routine check-ups, specialized treatments, or emergency care, Green Valley Medical Center stands ready to serve the diverse healthcare needs of our community. Here, healing isn't just a process—it's a promise we uphold with unwavering dedication.</p>
    </div>
    
    <center>
        <h1>Registration</h1>
    </center>
    
    <div align="center" class="registration">
        <form   method="POST" action="registration.php">

            <div class="intry">
                <label class="label_name">Name</label>
                <input class="input_dug" type="text" name="name" required>
            </div>

            <div class="intry">
                <label class="label_name">Email</label>
                <input class="input_dug" type="email" name="email" required>
            </div>

            <div class="intry">
                <label class="label_name">Phone</label>
                <input class="input_dug" type="text" name="phone" required>
            </div>

            <div class="intry">
                <label class="label_name">Message</label>
                <textarea class="input_dug" name="message" required></textarea>
            </div>
            
            <div class="intry">
                <input type="submit" name="apply" value="Apply">
            </div>
        </form>
    </div>
</body>
</html>

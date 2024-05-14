<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connect to your MySQL database
    $host = "localhost";
    $user = "root";
    $password = ""; // Put your MySQL password here if you have set one
    $dbname = "issue";

    // Create connection
    $conn = mysqli_connect($host, $user, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Retrieve form data
    $name = $_POST["name"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    // Prepare SQL statement to update the patient's profile information
    $sql = "UPDATE profile SET name='$name', dob='$dob', gender='$gender', email='$email', phone='$phone' WHERE id=1"; // Assuming patient ID is 1

    if (mysqli_query($conn, $sql)) {
        echo "Profile updated successfully";
    } else {
        echo "Error updating profile: " . mysqli_error($conn);
    }

    // Close database connection
    mysqli_close($conn);
}
?>

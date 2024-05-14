<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Profile</title>
    <link rel="stylesheet" type="text/css" href="profile.css">
</head>
<body>
    <header>
        <h1>Patient Profile</h1>
    </header>

    <div class="profile-info">
        <h2>Personal Information</h2>
        <ul>
            <li><strong>Name:</strong> <span id="nameValue">Anis</span></li>
            <li><strong>Date of Birth:</strong> <span id="dobValue">01-01-1998</span></li>
            <li><strong>Gender:</strong> <span id="genderValue">Male</span></li>
            <li><strong>Email:</strong> <span id="emailValue">anis@gmail.com</span></li>
            <li><strong>Phone:</strong> <span id="phoneValue">0182733637</span></li>
        </ul>
        
        <button id="edit-profile">Edit Profile</button>
    </div>

    <div class="medical-history">
        <h2>Medical History</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at nulla ut arcu varius elementum. Sed ac fermentum quam. Duis et ante sed nunc vulputate viverra eu at velit. Vivamus vel ante nec mauris fermentum venenatis.</p>
    </div>

    <footer>
        <p>Contact us: My Hospital.com</p>
    </footer>

    
    <div class="edit-profile-form" style="display: none;">
        <h2>Edit Profile</h2>
        <form action="update_profile.php" method="post">
            
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br>

            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required><br>

            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>

            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" required><br>

            <input type="submit" value="Update Profile">
            <button id="cancel-edit">Cancel</button>
        </form>
    </div>

    
    <script>
    document.getElementById("edit-profile").addEventListener("click", function() {
        // Hide profile info and show edit profile form
        document.querySelector(".profile-info").style.display = "none";
        document.querySelector(".medical-history").style.display = "none";
        document.querySelector(".edit-profile-form").style.display = "block";

        // Clear input fields
        document.getElementById("name").value = "";
        document.getElementById("dob").value = "";
        document.getElementById("gender").value = "";
        document.getElementById("email").value = "";
        document.getElementById("phone").value = "";
    });

    document.getElementById("cancel-edit").addEventListener("click", function() {
        // Show profile info and hide edit profile form
        document.querySelector(".profile-info").style.display = "block";
        document.querySelector(".medical-history").style.display = "block";
        document.querySelector(".edit-profile-form").style.display = "none";
    });
</script>

</body>
</html>

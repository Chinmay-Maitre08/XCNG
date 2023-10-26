<?php
// Start the session if not already started
session_start();

// Check if the user is logged in; if not, redirect to the login page
if (!isset($_SESSION['user_id'])) {
    header("Location: user_settings.php");
    exit;
}

// Include your header (navigation bar) and footer templates here
include("header.php"); // Replace with the actual header file
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>User Profile - XCNG</title>
    <!-- Add your CSS links here -->
    <link rel="stylesheet" type="text/css" href="profile.css">
</head>
<body>
    <!-- Profile Page Content -->
    <div class="profile-container">
        <h1>User Profile</h1>
        <!-- Display user details -->
        <div class="user-details">
            <p>Username: <?php echo $_SESSION['username']; ?></p>
            <p>Email: <?php echo $_SESSION['email']; ?></p>
            <!-- Add more user details as needed -->
        </div>

        <!-- Display user images or avatars -->
        <div class="profile-picture">
            <img src="profile_image.jpg" alt="Profile Picture">
        </div>

        <!-- Display recently viewed items -->
        <div class="recently-viewed">
            <h2>Recently Viewed Items</h2>
            <ul>
                <!-- Loop through and display recently viewed items -->
                <li>Item 1</li>
                <li>Item 2</li>
                <!-- Add more items here -->
            </ul>
        </div>
    </div>

    <?php
    // Include your footer template here
    include("footer.php"); // Replace with the actual footer file
    ?>
</body>
</html>

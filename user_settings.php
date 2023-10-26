<?php
// Simulated user data (replace with database queries)
$userData = [
    'username' => 'john_doe',
    'email' => 'john@example.com',
    'isLoggedIn' => true, // Simulated logged-in status
    // Add more user data as needed
];

// Check if the user is logged in
$isLoggedIn = $userData['isLoggedIn'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Process form submissions for updating user data
    if ($isLoggedIn) {
        // Implement form handling and database updates here
        // Example: change user password or email
        $newPassword = $_POST['new_password'];
        $newEmail = $_POST['new_email'];
        // Update user data in the database
    } else {
        // Redirect to the login page if the user is not logged in
        header('Location: login.php');
        exit;
    }
}

// HTML template for the user settings page
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>User Settings</title>
    <style>
        /* Global styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        /* Navigation bar styles */
        .nav-bar {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
            width: 100%;
        }

        .nav-links {
            list-style: none;
            padding: 0;
        }

        .nav-links li {
            display: inline;
            margin-right: 20px;
        }

        .nav-links a {
            color: #fff;
            text-decoration: none;
            font-size: 18px;
            transition: color 0.3s;
        }

        .nav-links a:hover {
            color: #f0f0f0;
        }

        /* Page-specific styles */
        h1 {
            color: #333;
            font-size: 24px;
        }

        p {
            color: #666;
            font-size: 16px;
        }

        form {
            max-width: 400px;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        /* Footer Styles */
        .footer {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="nav-bar">
        <nav>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="settings.php">Settings</a></li>
                <?php if ($isLoggedIn): ?>
                <li><a href="logout.php">Logout</a></li>
                <?php else: ?>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Register</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>

    <h1>User Settings</h1>
    <!-- Change Password Section -->
    <h2>Change Password</h2>
    <form method="POST" action="settings.php">
        <label for="new_password">New Password:</label>
        <input type="password" name="new_password" id="new_password"><br><br>
        <label for="confirm_password">Confirm Password:</label>
        <input type="password" name="confirm_password" id="confirm_password"><br><br>
        <input type="submit" value="Update Password">
    </form>

    <!-- Change Email Section -->
    <h2>Change Email</h2>
    <form method="POST" action="settings.php">
        <label for="new_email">New Email:</label>
        <input type="email" name="new_email" id="new_email"><br><br>
        <input type="submit" value="Update Email">
    </form>

    <!-- Add more sections for other settings -->

    <div class="footer">
        <p>&copy; <?php echo date('Y'); ?> XCNG. All rights reserved.</p>
    </div>
</body>
</html>

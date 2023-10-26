<!DOCTYPE html>
<html>
<head>
<style>
    /* Your existing styles */

    /* Modal styles */
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.7);
    }

    .modal-content {
        background-color: #f4f4f4;
        margin: 15% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 40%;
    }

    /* Close button style */
    .close {
        color: #888;
        float: right;
        font-size: 28px;
        font-weight: bold;
        cursor: pointer;
    }

    .close:hover {
        color: #000;
    }

    /* Style for the login form inside the modal */
    .login-form {
        text-align: center;
    }

    .login-form input[type="text"],
    .login-form input[type="password"],
    .login-form button {
        width: 100%;
        padding: 10px;
        margin: 5px 0;
    }

    .login-form button {
        background-color: #333;
        color: #fff;
        border: none;
        cursor: pointer;
    }

    .login-form button:hover {
        background-color: #555;
    }
</style>

    <meta charset="UTF-8">
    <title>Login</title>
    <!-- Include your CSS styles here if needed -->
</head>
<body>
    <h2>Login</h2>
    <form action="login_process.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br><br>

        <input type="submit" value="Login">
    </form>

    <!-- Add any additional content or styling for the popup as needed -->
</body>
</html>

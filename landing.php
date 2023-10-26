<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>XCNG - Landing Page</title>
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

        /* Header styles */
        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }

        header .logo a {
            color: #fff;
            text-decoration: none;
            font-size: 24px;
        }

        /* Navigation bar styles */
        header .navigation {
            list-style: none;
            padding: 0;
            background-color: #333;
            text-align: right;
        }

        header .navigation li {
            display: inline;
            margin-right: 20px;
        }

        header .navigation a {
            color: #fff;
            text-decoration: none;
            font-size: 18px;
            transition: color 0.3s;
        }

        header .navigation a:hover {
            color: #f0f0f0;
        }

        /* Landing Page styles */
        .landing-page {
            background-size: cover;
            color: #fff;
            text-align: center;
            padding: 100px 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100%;
        }

        .landing-page h1 {
            font-size: 36px;
        }

        .landing-page p {
            font-size: 18px;
            margin-top: 20px;
        }

        .form-toggle {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .form-toggle button {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            margin: 0 10px;
            cursor: pointer;
        }

        /* Form styles */
        .form-container {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 20px;
            border-radius: 10px;
            max-width: 400px;
            align-self: flex-end; /* Align form to the right */
        }

        .form-container h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .form-input {
            margin: 10px 0;
        }

        .form-input label {
            display: block;
            font-size: 18px;
        }

        .form-input input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-input button {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        /* Form toggle buttons */
        #login-form-btn, #registration-form-btn {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            margin: 0 10px;
            cursor: pointer;
        }

        /* Links in forms and landing page */
        .form-link, .go-to-home {
            color: #fff;
            text-decoration: none;
            font-size: 16px;
            margin: 10px 0;
        }

        /* Vertical Carousel */
        .carousel-container {
            width: 50%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .carousel {
            overflow: hidden;
            width: 100%;
            max-height: 50vh; /* Set maximum height to half of the viewport height */
        }

        .carousel img {
            width: 100%;
            height: auto;
        }

        /* Navigation Bar Styles */
        .nav-bar {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }

        .nav-bar .nav-links {
            list-style: none;
            padding: 0;
        }

        .nav-bar .nav-links li {
            display: inline;
            margin-right: 20px;
        }

        .nav-bar .nav-links a {
            color: #fff;
            text-decoration: none;
            font-size: 18px;
            transition: color 0.3s;
        }

        .nav-bar .nav-links a:hover {
            color: #f0f0f0;
        }

        /* Footer Styles */
        .footer {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
    </style>
</head>
<body>
    <header class="nav-bar">
        <nav>
            <div class="logo">
                <a href="index.php">XCNG</a>
            </div>
        </nav>
    </header>

    <section class="landing-page">
        <h1>Welcome to XCNG</h1>
        <p>Trade, buy, and sell virtual gaming items securely.</p>
    </section>

    <!-- Login Form -->
    <!-- <div class="form-container" id="login-form">
        <h2>Login</h2>
        <form action="login.php" method="post">
            <div class="form-input">
                <label for="login-username">Username:</label>
                <input type="text" id="login-username" name="username" required>
            </div>
            <div class="form-input">
                <label for="login-password">Password:</label>
                <input type="password" id="login-password" name="password" required>
            </div>
            <div class="form-input">
                <button type="submit">Login</button>
            </div>
        </form>
        <p>Don't have an account? <a class="form-link" href="registration.php">Register</a></p>
        <p>Continue as a guest? <a class="form-link go-to-home" href="index.php">Go to Home</a></p>
    </div> -->

    <!-- Registration Form (Hidden by default) -->
    <div class="form-container registration-form" id="registration-form">
        <h2>Register</h2>
        <form action="registration.php" method="post">
            <div class="form-input">
                <label for="register-username">Username:</label>
                <input type="text" id="register-username" name="username" required>
            </div>
            <div class="form-input">
                <label for="register-email">Email:</label>
                <input type="email" id="register-email" name="email" required>
            </div>
            <div class="form-input">
                <label for="register-password">Password:</label>
                <input type="password" id="register-password" name="password" required>
            </div>
            <div class="form-input">
                <button type="submit">Register</button>
            </div>
        </form>
        <p>Already have an account? <a class="form-link" href="login.php">Login</a></p>
        <p>Continue as a guest? <a class="form-link go-to-home" href="index.php">Go to Home</a></p>
    </div>

    <!-- Vertical Carousel -->
    <div class="carousel-container">
        <div class="carousel">
            <img src="image1.jpg" alt="Image 1">
            <img src="image2.jpg" alt="Image 2">
            <img src="image3.jpg" alt="Image 3">
            <!-- Add more image elements as needed -->
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2023 XCNG. All rights reserved.</p>
    </div>

    <script>
        function showLoginForm() {
            document.getElementById("login-form").style.display = "block";
            document.getElementById("registration-form").styledisplay = "none";
        }

        function showRegistrationForm() {
            document.getElementById("login-form").style.display = "none";
            document.getElementById("registration-form").style.display = "block";
        }

        // Initially show the login form
        showLoginForm();
    </script>
</body>
</html>

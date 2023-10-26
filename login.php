<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <!-- Include your CSS and JavaScript files here -->
    <style>
        /* Add your modal styles here */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 1;
        }

        .modal-content {
            background-color: #f4f4f4;
            margin: 20% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }
    </style>
</head>
<body>
    <h2>Login</h2>
    <p>Click the button below to open the login popup:</p>
    <button id="loginBtn">Login</button>

    <!-- The Modal -->
    <div id="loginModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeLoginModal()">&times;</span>
            <h2>Login</h2>
            <form action="login_process.php" method="post">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" required><br><br>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required><br><br>
                <input type="submit" value="Login">
            </form>
        </div>
    </div>

    <!-- Include JavaScript to handle the modal dialog -->
    <script>
        var loginModal = document.getElementById("loginModal");
        var loginBtn = document.getElementById("loginBtn");

        loginBtn.onclick = function () {
            loginModal.style.display = "block";
        };

        function closeLoginModal() {
            loginModal.style.display = "none";
        }

        window.onclick = function (event) {
            if (event.target == loginModal) {
                loginModal.style.display = "none";
            }
        }
    </script>
</body>
</html>

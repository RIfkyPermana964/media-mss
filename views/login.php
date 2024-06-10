<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../aset/style.css">
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <h2>SILAHKAN LOGIN</h2>
            <form id="loginForm" action="home.php" method="post">
                <div class="input-group">
                    <input type="text" id="username" placeholder="Username atau email .." required>
                </div>
                <div class="input-group">
                    <input type="password" id="password" placeholder="Password .." required>
                </div>
                <button type="submit" id="submitButton">LOGIN</button>
                <a href="#" class="back-link">kembali</a>
                <a href="#" class="back-link">registrasi</a>
            </form>
        </div>
    </div>

    <!-- JavaScript untuk mengarahkan submit ke home.php -->
    <script>
        const loginForm = document.getElementById('loginForm');
        const submitButton = document.getElementById('submitButton');
        loginForm.addEventListener('submit', function(event) {
            event.preventDefault();
            window.location.href = 'home.php';
        });
    </script>
</body>
</html>

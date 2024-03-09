<?php 



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From Login</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <section>
        <div class="login-box">
            <form action="">
                <h2>Form Login</h2>
                <div class="input-box">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Masukan Username" required>
                </div>
                <div class="input-box">
                    <label for="passwrod">Password</label>
                    <input type="text" name="password" id="password" placeholder="Masukan Password" required>
                </div>

                <button>
                    Login
                </button>

                <div class="register-link">
                    <p>Don't have a account? <a href="">Register</a></p>
                </div>
            </form>
        </div>
    </section>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rpLex Login System</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }
    nav {
        background-color: #333;
        color: white;
        padding: 1em 2rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .logo {
        font-size: 1.5em;
        font-weight: bold;
    }
    nav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        display: flex;
    }
    nav ul li {
        margin-left: 1em;
    }
    nav ul li a {
        color: white;
        text-decoration: none;
    }
    nav ul li a:hover {
        text-decoration: underline;
    }
    .primary-btn {
        padding: 0.75em 1.5em;
        background-color: #8CC63F;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        margin-top: 1em;
        cursor: pointer;
        border: none;
        font-size: 1.2rem;
        font-weight: 700;
    }
    .sign-up-form {
        width: 25rem;
        margin: 2rem auto;
        padding: 2rem;
        border-radius: 6px;
        background-color: #fff;
        overflow: hidden;
        box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
    }
    .sign-up-form input[type="text"],
    .sign-up-form input[type="email"],
    .sign-up-form input[type="password"] {
        padding: 0.75em;
        margin: 0.2em 0;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 1rem;
    }
    .form-group {
        display: flex;
        flex-direction: column;
    }
</style>
<body>
    <nav>
        <div class="logo" onclick="window.location.href='index.php'">Logo</div>
        <ul>
            <li><a href="login.php">Login</a></li>
            <li><a href="sign-up.php">Sign Up</a></li>
        </ul>
    </nav>
    <div class="container">
        <div class="intro" style="text-align: center; margin-bottom: 2rem;">
            <h1>Welcome to rpLex Login System</h1>
            <p>This is a placeholder for the login system interface.</p>
        </div>

        <?php
        require 'db.php';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Check if user exists
            $sql = "SELECT * FROM users WHERE email='$email'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);

            if ($row && password_verify($password, $row['password'])) {
                // Successful login 
                echo "<p style='color: green; text-align: center;'>Login successful!</p>";
                ?>
                <script>
                    setTimeout(function() {
                        window.location.href = 'https://www.quantumclassesbls.in/neet-jee.html';
                    }, 1000);

                </script>
                <?php
            } else {
                echo "<p style='color: red; text-align: center;'>Invalid email or password.</p>";
            }
        }

        ?>

        <form action="login.php" method="post" class="sign-up-form">
            <div class="form-group">
                <label for="Email">Email</label>
                <input type="email" name="email" id="Email" placeholder="Enter your email" required><br><br>
            </div>
            <div class="form-group">
                <label for="Password">Password</label>
                <input type="text" name="password" id="Password" placeholder="Enter your pasword" required><br><br>
            </div>
            <input type="submit" value="Login" class="primary-btn" style="width: 100%;">
        </form>
    </div>
</body>
</html>
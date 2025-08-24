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
    .container {
        padding: 2rem;
        text-align: center;
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
        <h1>Welcome to rpLex Login System</h1>
        <p>This is a placeholder for the login system interface.</p>
        <button 
            onclick="window.location.href='login.php'"
            class="primary-btn">Login</button>
    </div>
</body>
</html>
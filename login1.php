<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Page</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #8dc27e;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .login-container {
        background-color: #fff;
        padding: 40px;
        border-radius: 8px;
        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        width: 300px;
        max-width: 100%;
        text-align: center;
    }
    .login-container h2 {
        margin-bottom: 20px;
    }
    .login-container input[type="text"],
    .login-container input[type="password"] {
        width: calc(100% - 20px);
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }
    .login-container input[type="submit"] {
        background-color: #4caf50;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    .login-container input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>
</head>
<body>
<div class="login-container">
    <h2>ADMIN LOGIN</h2>
    <form action="login2.php" method="POST">
        <input type="text" name="userName" placeholder="Username" required>
        <input type="password" name="password2" placeholder="Password" required>
        <input type="submit"  value="Login">
    </form>
    <div><a href="signup.html">Sign up</a></div>
</div>
</body>
</html>

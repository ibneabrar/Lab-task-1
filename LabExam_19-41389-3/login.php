<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <style>
        .login-box {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
        }

    </style>
</head>
<body>
    <div class="login-box">
        <h2>Login</h2>
        <form action="login.php" method="post">
            <input type="text" name="email" placeholder="Email" >
            <input type="password" name="password" placeholder="Password">
            <br><br>
            <input type="submit" value="Login">
           
        <p>Don't have an account? <a href="registration.php">Sign Up</a></p>
            </a>
        </form>
    </div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>

        header, footer {
            padding: 10px;
            background-color: #f2f2f2;
            border: 1px solid #ddd;
            margin-bottom: 20px;
        }
        
        .logo {
            float: left;
        }
        
        .nav {
            float: right;
        }
        
        .nav a {
            margin-left: 10px;
            height: 100;
            width: 100;
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }
        .login-box {
            width: 300 px;
            background-color: whitesmoke;
            border: 1 px solid #ccc;
            padding: 20px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <header>
        <fieldset>
            <div class="logo">
                <img src="company_logo.png" alt="Company Logo" width="100" height="100">
            </div>
            <div class="nav">
                <a href="index.php">Home</a>
                <a href="login.php">Login</a>
                <a href="registration.php">Registration</a>
            </div>
        </fieldset>
    </header>
    <main>
    <?php

    $username = $password = "";
    $usernameErr = $passwordErr = "";


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
        if (empty($_POST["username"])) {
            $usernameErr = "Username is required";
        } else {
            $username = test_input($_POST["username"]);
        }

        
        if (empty($_POST["password"])) {
            $passwordErr = "Password is required";
        } else {
            $password = test_input($_POST["password"]);
        }


        if (empty($usernameErr) && empty($passwordErr)) {

            if ($username == "admin" && $password == "password") {
                echo "Login successful!";
            } else {
                echo "Invalid username or password";
            }
        }
    }

    
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    <div class="login-box">
    <h2>Login</h2>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>
        <span class="error"><?php echo $usernameErr; ?></span>
        <br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        <span class="error"><?php echo $passwordErr; ?></span>
        <br><br>
        <input type="submit" value="Login">
        <a href="forgotPass.php">Forgot Password?</a>
    </form>
    </div>
    </main>



    <footer>
        <fieldset>
            <legend>&copy; <?php echo date('Y'); ?> Copyright</legend>
        </fieldset>
    </footer>
</body>
</html>


<!DOCTYPE html>
<html>
<head>
    <title>Reset Pass</title>
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
        .b {
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
    <div class="b">
    <h1>Forgot Password</h1>
    
  Enter Email :  <input type="text" name="forgetPassword">
  <br><br>
<input type="submit" name="submit">
</div>
</main>
    <footer>
        <fieldset>
            <p>&copy; <?php echo date('Y'); ?> Copyright</p>
        </fieldset>
    </footer>
</body>
</html>

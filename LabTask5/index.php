<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
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

    <h1>Welcome Titan Company</h1>

    <footer>
        <fieldset>
            <p>&copy; <?php echo date('Y'); ?> Copyright</p>
        </fieldset>
    </footer>
</body>
</html>

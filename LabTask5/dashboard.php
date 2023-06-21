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

<main>
<style>
body {
            display: flex;
        }

        #left-dock {
            width: 200px;
            background-color: #f2f2f2;
            padding: 10px;
            border: 1px solid #ddd;
        }

        #content {
            flex-grow: 1;
            padding: 10px;
        }

        #content p {
            font-size: 18px;
            line-height: 1.5;
</style>        }

    <?php
    // Example user data
    $username = "John Doe";
    $email = "johndoe@example.com";
    ?>

    <div id="left-dock">
        <h3>Account Information</h3>
        <ul>
            <li><a href="#">View Profile</a></li>
            <li><a href="#">Change Profile</a></li>
            <li><a href="#">Change Password</a></li>
            <li><a href="#">Logout</a></li>
        </ul>
    </div>

    <div id="content">
        <h2>Welcome, <?php echo $username; ?>!</h2>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam luctus
            augue ac velit lacinia, vel efficitur velit laoreet. Nulla auctor felis
            elit, sit amet congue nisl facilisis sed. In pretium purus a tincidunt
            lacinia. Nunc ac ex non ligula convallis hendrerit. Aliquam gravida
            tellus ut leo congue, non mollis massa ultricies. Sed tincidunt, elit eu
            pulvinar ultrices, mi turpis tincidunt felis, vel pharetra quam tortor
            non nulla.
        </p>
    </div>
</main>

    <footer>
        <fieldset>
            <p>&copy; <?php echo date('Y'); ?> Copyright</p>
        </fieldset>
    </footer>
</body>
</html>
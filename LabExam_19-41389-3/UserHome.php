<!DOCTYPE html>
<html>
<head>
    <title>User Homepage</title>
    <style>
    <style>
        .container {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
        }

    </style>
    </style>
</head>
<body>
    <div class="container">
        <h2>Welcome, <?php echo $UserUsername; ?>!</h2>
        <ul>
            <li><a class="nav-link" href="profile.php">Profile</a></li>
            <li><a class="nav-link" href="change_password.php">Change Password</a></li>
            <li><a class="nav-link" href="logout.php">Logout</a></li>
        </ul>
    </div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Registration Page</title>
    <style>
        .Regis-box {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>
    <div class="Regis-box">
        <h2>Registration</h2>
        <form action="registration.php" method="post">
            <input type="text" name="email" placeholder="Email"><br>
            <input type="password" name="password" placeholder="Password"><br>
            <input type="password" name="Cpassword" placeholder="Confirm Password"><br>
            <input type="text" name="name" placeholder="Name"><br>
            <input type="radio" name="usertype" value="user" id="user">
            <label for="user">User</label><br>
            <input type="radio" name="usertype" value="admin" id="admin">
            <label for="admin">Admin</label><br><br>
            <input type="submit" value="Sign Up">
        </form>
        <p>Already have an account? <a href="login.php">Sign In</a></p>
    </div>
</body>
</html>



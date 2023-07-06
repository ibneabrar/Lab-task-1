<!DOCTYPE html>
<html>
<head>
    <title>Change Password</title>
    <style>
      .container {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
        }

    </style>
</head>
<body>
    <div class="container">
        <h2>Change Password</h2>
        <form method="POST" action="changepassword.php">
            <div class="form-group">
                <label for="current_password">Current Password:</label><br>
                <input type="password" name="current_password" id="current_password" ><br>
      

                <label for="new_password">New Password:</label><br>

                <input type="password" name="new_password" id="new_password" ><br>

        

                <label for="confirm_password">Confirm Password:</label><br>

                <input type="password" name="confirm_password" id="confirm_password" ><br>

            </div>
             <br><br>
                <input type="submit" value="Change Password">

        </form>
    </div>
</body>
</html>

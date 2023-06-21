<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
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
        .reg-box {
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
    <div class="reg-box">
    <main>
    <?php

    $name = $email = $password = $confirmPassword = $gender = $dob = "";
    $nameErr = $emailErr = $passwordErr = $confirmPasswordErr = $genderErr = $dobErr = "";


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validate name
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
            // Check if name contains only letters and whitespace
            if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
                $nameErr = "Only letters and white space allowed";
            }
        }


        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
            // Check if email address is valid
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }


        if (empty($_POST["password"])) {
            $passwordErr = "Password is required";
        } else {
            $password = test_input($_POST["password"]);

        }


        if (empty($_POST["confirmPassword"])) {
            $confirmPasswordErr = "Confirm password is required";
        } else {
            $confirmPassword = test_input($_POST["confirmPassword"]);
            // Check if password and confirm password match
            if ($password != $confirmPassword) {
                $confirmPasswordErr = "Passwords do not match";
            }
        }


        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        } else {
            $gender = test_input($_POST["gender"]);
        }

        // Validate date of birth
        if (empty($_POST["dob"])) {
            $dobErr = "Date of birth is required";
        } else {
            $dob = test_input($_POST["dob"]);
            // Add your date of birth validation rules here
        }


        if (empty($nameErr) && empty($emailErr) && empty($passwordErr) && empty($confirmPasswordErr) && empty($genderErr) && empty($dobErr)) {
            // Add your registration logic here
            // Example: Store the registration data in a database
            // You can redirect to a success page or perform additional actions
            echo "Registration successful!";
        }
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <h2>Registration Form</h2>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="<?php echo $name; ?>" required>
        <span class="error"><?php echo $nameErr; ?></span>
        <br><br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?php echo $email; ?>" required>
        <span class="error"><?php echo $emailErr; ?></span>
        <br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        <span class="error"><?php echo $passwordErr; ?></span>
        <br><br>
        <label for="confirmPassword">Confirm Password:</label>
        <input type="password" name="confirmPassword" id="confirmPassword" required>
        <span class="error"><?php echo $confirmPasswordErr; ?></span>
        <br><br>
        <label for="gender">Gender:</label>
        <input type="radio" name="gender" value="male" <?php if ($gender == "male") echo "checked"; ?> required> Male
        <input type="radio" name="gender" value="female" <?php if ($gender == "female") echo "checked"; ?>> Female
        <input type="radio" name="gender" value="other" <?php if ($gender == "other") echo "checked"; ?>> Other
        <span class="error"><?php echo $genderErr; ?></span>
        <br><br>
        <label for="dob">Date of Birth:</label>
        <input type="date" name="dob" id="dob" value="<?php echo $dob; ?>" required>
        <span class="error"><?php echo $dobErr; ?></span>
        <br><br>
        <input type="submit" value="Register"> 
        <nav><a href="login.php">Sign in</a></nav> 
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



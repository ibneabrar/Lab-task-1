<?php
session_start(); 
   
   $username = $_POST['$username'];
   $password = $_POST['$password'];



    $conn = mysqli_connect('localhost','root','', 'prd');
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }

    return $conn;

    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $status = mysqli_query($conn, $sql);

    if ($status && mysqli_num_rows($status) > 0) {
        $row = mysqli_fetch_assoc($status);
        $user = $row;

        $_SESSION['user'] = $row['user']; 

        if ($row['user_type'] === 'admin') {
            setcookie('status', 'true', time() + 3600, '/');
            header('Location: adminHome.php');
            exit();
        } else {
            setcookie('status', 'true', time() + 3600, '/');
            header('Location: analystHome.php');
            exit();
        }
    } else {
        header('Location: login.php?msg=invalid');
        exit();
    }

?>

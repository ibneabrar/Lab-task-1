<!DOCTYPE HTML>
<html>
<head>
   
</head>
   <body>
   
<?php
  
   $emailErr = "";
   $email= "";
   
   if ($_SERVER["REQUEST_METHOD"]=="POST") {
      
      if (empty($_POST["email"])) {
         $emailErr = "Email is Required!";
      } else {
      
      $email = test_input($_POST["email"]);

      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
         $emailErr = "Invalid email format!!";
     }
    }
}
   
   function test_input($data){
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data; 
   }
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
   
E-mail : <input type="text" name="email">
<span class="error">* <?php echo $emailErr; ?> </span>
<br><br>
<input type="submit" name = "submit">

</form>
<?php
echo "<h2>Result : </h2>";
echo $email;
?>
   
   </body>
</html>
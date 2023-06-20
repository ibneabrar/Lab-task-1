<!DOCTYPE HTML>
<html>
<head>
   
</head>
   <body>
   
<?php
   
   $genderErr = "";
   $gender = "";
   
   if ($_SERVER["REQUEST_METHOD"]=="POST"){
      if (empty($_POST["gender"])){
         $genderErr = "gender is Required!";
      } else {
      $gender = test_input($_POST["gender"]);
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
   
Gender :
<input type = "radio" name = "gender" value="male"> Male
<input type="radio" name ="gender" value="female"> Female
<input type="radio" name="gender" value="other"> Other
<span class="error">* <?php echo $genderErr; ?> </span>
<br><br>
<input type="submit" name = "submit">

</form>
   </body>
</html>
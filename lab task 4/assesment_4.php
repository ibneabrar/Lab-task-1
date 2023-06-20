<!DOCTYPE HTML>
<html>
<head>
   
</head>
   <body>
   
<?php
   
   $degreeErr = "";
   $degree = "";
   
   if ($_SERVER["REQUEST_METHOD"]=="POST"){
      if (empty($_POST["degree"])){
         $genderErr = "Degree is Required!";
      } else {
      $gender = test_input($_POST["degree"]);
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
<input type = "radio" name = "degree" value="SSC"> SSC
<input type="radio" name ="degree" value="HSC"> HSC
<input type="radio" name="degree" value="Bsc"> Bsc
<input type="radio" name = "degree" value="Msc"> Msc
<span class="error">* <?php echo $degreeErr; ?> </span>
<br><br>
<input type="submit" name = "submit">

</form>
   </body>
</html>
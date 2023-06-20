<!DOCTYPE HTML>
<html>
<head>
   
</head>
   <body>
   
<?php
   $nameErr = "";
   $name = "";
   
   if ($_SERVER["REQUEST_METHOD"]=="POST"){
      if (empty($_POST["name"])){
         $nameErr = "Name is Required!";
      }else{
      $name = test_input($_POST["name"]);

      if (!preg_match("/^[a-zA-Z-'']*$/", [$name])){
         $nameErr = "only letteres and whitespaces allowed!";
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
   
Name : <input type="text" name="name">
<span class="error">* <?php echo $nameErr; ?> </span>
<br><br>
<input type="submit" name = "submit">

</form>
<?php
echo "<h2>Result : </h2>";
echo $name;
?>
   
   </body>
</html>
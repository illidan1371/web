<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php include("class_lib.php");  ?>
    <?php $stefan = new person("Stefan sag");
          echo "Tell me private stuff: " . $stefan->$pinn_number;
          $jimmy = new person("Nick olagh");
          echo"stefan's full name is: ".$stefan -> get_name()."<br>";
          echo"jimmy's full name is: ".$jimmy -> get_name();
     ?>
  </body>
</html>

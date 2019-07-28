<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $link = mysqli_connect("127.0.0.1" , "root"  , "" , "shadi");
    if ($link) {
      echo"connected to the database!"."<br>";
    }
    $query = "SELECT * FROM users";
    if (  $result = mysqli_query($link , $query)) {
      echo"successful query!"."<br>";
      $row = mysqli_fetch_array($result);
      echo"your usename is: ".$row['username']."<br>";
      echo"your password is: ".$row['password']."<br>";
      echo"your email is: ".$row['email']."<br>";
      $username = $_POST["username"];
      $password = $_POST["password"];
      $query = "INSERT INTO `users` (`username` , `password`) VALUES
      ($username , $password)";
      if (  mysqli_query($link , $query)) {
        echo"registered successfully!";
      } else{
        echo "<br>"."failed to register!";
      }

    }


     ?>
     <form class=""  method="post">
       <input type="text" name="username" value="" placeholder="username">
       <input type="text" name="password" value="" placeholder="password">
       <input type="submit" name="" value="register">
     </form>


  </body>
</html>

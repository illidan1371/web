<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!--ask for email and password-->
    <form class="" action="index.html" method="post">
      <input type="email" name="email" placeholder="e-mail">
      <input type="text" name="password" value="">
      <input type="submit" name="" value="register">
    </form>
    <?php
    //connect to the database
    $link=mysqli_connect('127.0.0.1' , 'root' , "" , 'shadi');
    //check if connection to the database was successful
    if (!$link) {
      echo "failed to connect to the database!"."<br>";
      //retrieve data from the database
    } else{
      $query = "SELECT * FROM `users`";
      $result = mysqli_query($link , $query);
      $row = mysqli_fetch_array($result);
      print_r($row);
    }
   //check if email and password are entered
   if ($_POST) {
    //check if email is already registered
     $db_emails = $row['email'];
     foreach ($db_emails as $db_email) {
       if ($_POST['email'] == $db_email) {
         echo "email already registered!"."<br>";
       }
   }
 }elseif (!$_POST['email']  || !$_POST['password'] ) {
   echo "<br>"."both fields are required!";
 }
      //sign the user up
      //store user's email and password in variables
      $email = $_POST['email'];
      $password = $_POST['password'];
      $query2 = "INSERT INTO `users` (`email` , `password`) VALUES
      ($email , $password)";
      $result2 = mysqli_query($link , $query2);
      if ($result2) {
          echo "<br>"."user successfully registered!";
      }
 ?>
  </body>
</html>

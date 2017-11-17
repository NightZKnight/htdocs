<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body style="font-family: Arial; background: #EEE;">

    <?php

      $db = new PDO("sqlite:chat.db");

      $result = $db->prepare('SELECT secret FROM users WHERE name = ?');
      $result->execute(array($_POST['name']));

      $temp = $result->fetch();


      if (password_verify($_POST['password'], $temp[0])) {
        echo "yes!";
      } else {
        echo "YOU SUCK!";
      }

     ?>

  </body>
</html>

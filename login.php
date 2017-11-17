<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body style="font-family: Arial; background: #EEE;">

    <?php

      $db = new PDO("sqlite:chat.db");
       echo password_hash("password64", PASSWORD_DEFAULT);

     ?>

  </body>
</html>

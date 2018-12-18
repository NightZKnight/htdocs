<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="master.css">
    <script src="main.js" charset="utf-8"></script>
    <link href="https://fonts.googleapis.com/css?family=Catamaran:500" rel="stylesheet">
    <title>Cards</title>
  </head>
  <body>

    <!-- TODO stuff todo
      use flex box for the layout and grid-template-area for the infore mations
      autocomplete-paths

    -->

    <div class="top-bar">
      <img src="img/logo.png" alt="logo">
      <img src="img/text.svg" alt="logo-text">

      <input class="search-box" type="text" name="search" value="" placeholder="search">

      <img src="img/cookie-admin.jpg" alt="admin-pic">
      <svg class="carrot" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><g><path fill="inherit" d="M14.1711599,9.3535 L9.99925636,13.529 L5.82735283,9.3535 C5.51262415,9.0385 5.73543207,8.5 6.18054835,8.5 L13.8179644,8.5 C14.2630807,8.5 14.4858886,9.0385 14.1711599,9.3535"></path></g></svg>
    </div>



    <div class="wrapper">
      <?php

      $db = new PDO('sqlite:info.sqlite');
      $sql = "SELECT * FROM articles";

      foreach ($db->query($sql) as $row) { //go thru each row in database and out put as a card.

       ?>

       <a class="titleURL" href="<?php echo $row['url']; ?>" target="_blank">
         <article class="card">
           <div>
             <?php echo $row['title']; ?>
           </div>
           <div class="dis">
             <?php echo $row['dis']; ?>
           </div>
           <div class="picure">
             <img src="<?php echo $row['img'] ?>" alt="this->og:image">
           </div>
         </article>
       </a>

      <?php } ?>
    </div>



  </body>
</html>

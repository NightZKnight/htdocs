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


    <div id="dim" class="dim"></div>
    <form id="login-popup" class="card card-popup hidden" action="#" method="post">
      <h5>NAME</h5>
      <input type="text" name="name" value="">
      <h5>PASSWORD</h5>
      <input type="text" name="secret" value="">
      <h5> </h5>
      <input class="submit" type="submit" name="Login" value="Login">
    </form>





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
           <img src="<?php echo $row['img'] ?>" alt="current">
         </div>
       </article>
     </a>

    <?php } ?>

     <a id="add" href="#">add</a>



  </body>
</html>

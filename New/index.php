<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="master.css">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:500" rel="stylesheet">
    <title>Cards</title>
  </head>
  <body>

    <!-- TODO stuff todo
      use flex box for the layout and grid-template-area for the infore mations
      autocomplete-paths

    -->
    <?php

    $db = new PDO('sqlite:info.sqlite');
    $sql = "SELECT * FROM articles";

    foreach ($db->query($sql) as $row) {

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

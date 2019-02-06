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
         Use flex box for the layout and grid-template-area for the infore mations
         Autocomplete-paths
         Fetch API MDN
         Use transform for dropdown https://developer.mozilla.org/en-US/docs/Web/CSS/transform
         https://discordapp.com/
         Remove login avatar dummy and replace with hidden login button
         Read VueJs Docs
         https://codepen.io/simoberny/pen/WMMqwL
		   Text color hsla(0, 0%, 100%, 0.5)


         -->

      <header>
         <img class="flt-lt" src="img/text.svg" alt="logo-text">

         <div class="avatar">
            <div class="overlay"></div>
            <img class="flt-rt" src="img/cookie-admin.jpg" alt="admin-pic">
            <svg class="carrot" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><g><path fill="inherit" d="M14.1711599,9.3535 L9.99925636,13.529 L5.82735283,9.3535 C5.51262415,9.0385 5.73543207,8.5 6.18054835,8.5 L13.8179644,8.5 C14.2630807,8.5 14.4858886,9.0385 14.1711599,9.3535"></path></g></svg>
            <ul class="hide">
               <li> <a href="#">SIGN IN</a>  </li>
            </ul>
         </div>

         <input class="search-box flt-rt" type="text" name="search" value="" placeholder="Search">
      </header>

      <div class="wrapper">




         <section class="container">
            <?php

            $db = new PDO('sqlite:info.sqlite');
            $sql = "SELECT * FROM articles";

            foreach ($db->query($sql) as $row): //go thru each row in database and out put as a card.

               ?>

               <a class="titleURL" href="<?php echo $row['url']; ?>" target="_blank">
                  <article class="card">
                     <div>
                        <?php echo $row['title']; ?>
                     </div>

                     <div class="dis">
                        <?php echo $row['dis']; ?>
                     </div>

                     <div class="picture">
                        <img src="<?php echo $row['img']; ?>" alt="og:image">
                     </div>

                  </article>
               </a>

            <?php endforeach; ?>
         </section>


      </div>
   </body>
</html>

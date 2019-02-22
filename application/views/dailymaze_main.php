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
   https://torrentfreak.com/pirate-powered-cdns-operate-innovative-illicit-streaming-model-190203/
   https://www.reddit.com/r/Unexpected/comments/apsb1e/hes_got_some_moves/
   add like functionality

   https://www.dailywire.com/news/38900/watch-ocasio-cortez-compares-election-victory-ryan-saavedra
   https://www.dailywire.com/news/39177/pelosi-border-wall-immoral-we-need-secure-our-frank-camp


   -->


   <div class="wrapper">



      <section class="container">
         <?php

         // $db = new PDO('sqlite:info.sqlite');
         // $sql = "SELECT * FROM articles";

         foreach ($oglinks as $row): //go thru each row in database and out put as a card.

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

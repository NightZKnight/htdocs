<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="master.css">
    <title>Die Mr. Die | Home</title>
  </head>
  <body>

    <?php include 'inc/header-nav.php'; ?>

    <section id="main-content">
      <div class="container">

        <article id="main-col">

          <h3>Things you should watch</h3>
          <p>plz dont not watch all these wonderful videos ok?</p>

          <div id="flex-grid">

            <img src="img\SWR-keyArt-thumb.jpg" alt="SWR Key Art" class="pHeader">
            <div>
              <?php
                $episode = 16;

                for ($i=1; $i < $episode; $i++) {
                  echo "<div id='cards'>Season 04 Episode ";
                  if ($i < 10) {
                      echo "0$i </div>\n";
                  } else {
                      echo "$i </div>\n";
                  }
                }

               ?>
            </div>

          </div>

        </article>

        <aside>
          <div class="dark">
            <h3>We are trash</h3>
            <p>Do not let us through out the trash or we will kil everyone. asldasdfasdasd asdfa.sdfasdfasd.fa  das sdf as as dasdasd sdf asdasdfa sdasd.fasd asdfjsdlsdkfajd sd alsdasdjlksdfjeioeafdkznf dfa sdfs. d fsfeo aseoaf sdl;aksdf e as.</p>
          </div>
        </aside>

      </div>
    </section>

    <?php include 'inc/footer.php'; ?>

  </body>
</html>

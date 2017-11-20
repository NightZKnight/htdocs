<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="master.css">
    <title>Die Mr. Die | Home</title>

    <script src="jquery-3.2.1.min.js" charset="utf-8"></script>
    <script src="login.js" charset="utf-8"></script>

  </head>
  <body>

    <?php include 'inc/header-nav.php'; ?>

    <section id="main-content">
      <div class="container">

        <article id="main-col">
          <h3>Super Secret About Page</h3>
          <p>This is the best about page on the face of the earth</p>
          <div id="about-cards">
            <h3>Better</h3>
            <p>We make your stuff alot better <span style="font-size: 6pt;">don't ask</span></p>
          </div>
          <div id="about-cards">
            <h3>Home improvment</h3>
            <p>We don't really do this but, why would you think that anywhy?</p>
          </div>
          <div id="about-cards">
            <h3>Cleanup crew</h3>
            <p>We totally don’t do this</p>
          </div>
          <div id="about-cards">
            <h3>You a Member?</h3>
            <p>Then <a href="#" id="login">Login</a> </p>

            <div id="eee" class="dim"></div>
            <div id="popup" class="hide">
              <form action="login.php" method="post" style="overflow: hidden;">

                <div class="wrapper">
                  <input type="text" name="name" placeholder="User name">
                  <span id="bar"></span>
                </div>

                <div class="wrapper">
                  <input type="password" name="password" placeholder="Password">
                  <span id="bar"></span>
                </div>

                <input type="submit" name="submit" value="Submit">
              </form>
            </div>

          </div>
        </article>

        <aside>
          <div class="dark">
            <h3>We are trash</h3>
            <p>Do not let us through out the trash or we will kil everyone. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </aside>

      </div>
    </section>

    <?php include 'inc/footer.php'; ?>

  </body>
</html>

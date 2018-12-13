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

      require_once 'OpenGraph.php';

      // fetch OpenGraph data form URL
      $urlToFetch = 'https://www.dailywire.com/news/39177/pelosi-border-wall-immoral-we-need-secure-our-frank-camp';
      $ogMeta = OpenGraph::fetch($urlToFetch) or die('OpenGraph FAILED!');

      // open database and get cashed data
      $db = new PDO("sqlite:info.sqlite") or die("pls kill me");
      $result = $db->prepare('INSERT INTO articles (title, dis, img, url) VALUES ( ?, ?, ?, ?)');

      $result->execute(array($ogMeta->title, $ogMeta->description, $ogMeta->image, $ogMeta->url));


      // $sql = "SELECT * FROM articles";
      //
      // foreach ($db->query($sql) as $row) {
      //   echo $row['title'] . "<br>";
      // }


      $db = null;

     ?>

     <pre>



     </pre>



  </body>
</html>

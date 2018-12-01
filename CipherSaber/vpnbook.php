<?php

  $wow = file_get_contents("https://www.vpnbook.com/password.php");

  $wow = trim($wow);

  if (empty($wow))
  {
    print("f*ck");
  }
  else
  {
    $picFile = fopen("dummy.jpg", "w+");

    fwrite($picFile, $wow);
    $e = fclose($picFile);

    print($e ? "It's done. Wow." : "f*ck");
    echo "<br> <img src='dummy.jpg'>";
  }


?>

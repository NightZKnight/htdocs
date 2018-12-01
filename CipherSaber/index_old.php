<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Die Mr. Die | test</title>
  </head>
  <body>

    <?php

      $file = "./CSTEST1.CS1";
      $file2 = "./temp.cs1";

      $fb = fopen($file, "rb");
      $fb2 = fopen($file2, "wb");

      $IV = [];
      $K = [];
      $pass = 'hii';
      $pData = 'this is a very secret test';

      // Put the $pass in an array as  ASCII values
      for ($i=0; $i < strlen($pass); $i++)
      {
        $K[] = ord($pass[$i]);
      }
      // Same for $pData
      for ($i=0; $i < strlen($pData); $i++)
      {
        $data[] = ord($pData[$i]);
      }

      for($i = 0; $i != 9 ; $i++)
      {
          $other = random_int(0, 255);
          $IV[] = $other;
          $dat = pack("C*", $other);
          fwrite($fb2, $dat);
      }

      // make $S equal to 0 , 1, 2, ..., 255
      $S = array();
      for ($i=0; $i != 256; $i++) {
        $S[] = $i;
      }
      // Make $K equal $pass plus $IV
      $K = array_merge($K, $IV);

      $len = count($K);

      $A = 0;
      $B = 0;

      for ($i=0; $i < 256; $i++)
      {
        $B = ($K[$A] + $S[$i] + $B) % 256;
        // swap $S[$i] with $S[$B]
        $tmp = $S[$i];
        $S[$i] = $S[$B];
        $S[$B] = $tmp;
        $A = ($A + 1) % $len;
      }

      $A = 0;
      $B = 0;

      $len = count($data);

      for ($i=0; $i < $len; $i++)
      {
        $A = ($A + 1) % 256;
        $B = ($S[$A] + $B) % 256;
        // swap $S[$A] with $S[$B]
        $tmp = $S[$A];
        $S[$A] = $S[$B];
        $S[$B] = $tmp;
        $data[$i] ^= $S[($S[$A] + $S[$B]) % 256];
      }

      $tessst = fread($fb, 256);
      $tmp = bin2hex($tessst);
      echo $tmp;


      // print_r($S);

      fclose($fb);
      fclose($fb2);

     ?>





  </body>
</html>

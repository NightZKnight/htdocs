<?php

  function rc4($dir, $key_str){

    $state = [];
    $key = [];
    $msg = [];
    $j = 0;
    $n = 0;

    // Put the $key_str in an array as  ASCII values
    for ($i=0; $i < strlen($key_str); $i++)
    {
      $key[] = ord($key_str[$i]);
    }
    // grab the first 10 bytes from CSTEST1.CS1 for the $IV and the rest of the message in $msg
    $file = fopen($dir, 'rb');

    $IV = fread($file, 10);
    $IV = unpack('C*', $IV);

    $tmp = fread($file, 100000);

    for ($i=0; $i < strlen($tmp); $i++)
    {
      $msg[] = ord($tmp[$i]);
    }

    fclose($file);
    // merge $key with the $IV
    $key = array_merge($key, $IV);

    // make $state 0-255
    for ($i=0; $i < 256; $i++) {
      $state[] = $i;
    }

    // mix the $state array based off the $key array
    for ($i=0; $i < 256; $i++) {
      $j = ($j + $state[$i] + $key[$n]) % 256;
      // swap
      $tmp = $state[$i];
      $state[$i] = $state[$j];
      $state[$j] = $tmp;
      // increase $n modulo the length of $key
      $n = ($n + 1) % count($key);
    }
    $a = 0;
    $i = 0;
    $j = 0;

    $len = count($msg);

    for ($i=0; $i < $len; $i++) {
      $a = ($a + 1) % 256;
      $j = ($state[$a] + $j) % 256;
      // swap
      $tmp = $state[$a];
      $state[$a] = $state[$j];
      $state[$j] = $tmp;

      $msg[$i] ^= $state[($state[$a] + $state[$j]) % 256];
    }

    // echo decoded text
    foreach ($msg as $key) {
      echo chr($key);
    }

    // $fb = fopen('hii.gif', 'wb');
    //
    // foreach ($msg as $tmp) {
    //   $tmp = pack('C*', $tmp);
    //   fwrite($fb, $tmp);
    // }
    //
    // fclose($fb);

  }
  // Check if file exists before tring to decode it
  $filename = $_POST['name'];

  if (file_exists($filename)) {
      rc4($_POST['name'], $_POST['key']);
  } else {
      echo "<b><i>$filename</i></b> does not exist";
  }


 ?>

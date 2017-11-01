<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../master.css">
    <link rel="stylesheet" href="test.css">
    <title>Die Mr. Die | RC4</title>

    <script src="../jquery-3.2.1.min.js" charset="utf-8"></script>
    <script type="text/javascript">

      function test(){

        $.post( "rc4.php", $("#test").serialize(), function(data){
          $("#hi").html(data);
        });

      }

    </script>

  </head>
  <body>
    <div class="container">

     <form id="test" class="form" action="rc4.php" method="post">
       <input type="text" name="name" value="files/cstest1.cs1">
       <input type="password" name="key" value="" placeholder="password">
       <input type="button" name="Submit" value="Submit" onclick="test()"> <br><br>
     </form>
     <div id="hi"></div>

   </div>

  </body>
</html>

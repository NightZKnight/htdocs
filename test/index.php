<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../master.css">
    <link rel="stylesheet" href="test.css">
    <title>Die Mr. Die | RC4</title>

    <script src="../jquery-3.2.1.min.js" charset="utf-8"></script>
    <script type="text/javascript">


      $(document).ready(function() {

        $("#test").on("submit", function(e) {
          e.preventDefault();
        });

      });

      function test(){
        // ajax the rc4.php and reset the password input box
        $.post( "rc4.php", $("#test").serialize(), function(data){
          $("#hi").html(data);
          $("form input[type=password]").val("");

        });

      }

    </script>

  </head>
  <body>
    <div class="container">

     <form id="test" class="form" action="rc4.php" method="post">
       <input type="text" name="name" value="files/CSTEST1.CS1">
       <input type="password" name="key" value="" placeholder="password">
       <input type="submit" value="Submit" onclick="test()"> <br><br>
     </form>
     <div id="hi"></div>

   </div>

  </body>
</html>

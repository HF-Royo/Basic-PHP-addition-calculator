<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    
    < ! ╌ site.php is a file name ╌>
    <form action="site.php" method="get">

      <input type="number" name="num1">
      <br>
      <br>
      <input type="number" name="num2">
      <br>
      <br>
      <input type="submit">

    </form>

    <br>
    Answer: <?php echo $_GET["num1"] + $_GET["num2"] ?>

  </body>
</html>

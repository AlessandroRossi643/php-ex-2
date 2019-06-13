<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHPex_2_AR</title>
    <link rel="stylesheet" href="public/css/style.css">
  </head>
  <body>
    <div class="container">
      <?php
      if ($_GET["password"]=="Boolean") {
        echo '<div class="riquadro green"><h3>PASSWORD CORRETTA!</h3></div>';
      }
      else {
        echo '<div class="riquadro red"><h3>PASSWORD ERRATA!</h3></div>';
      }
      ?>
    </div>
  </body>
</html>

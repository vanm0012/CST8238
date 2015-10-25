<!DOCTYPE html>
<?php
include("Header.php");
include("Menu.php");
include("Footer.php");
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="author" content="tryton-vanmeer">
    <title>Lab 6</title>
    <link href="css/Stylesheet.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <?php _header(); ?>
    <main>
      <?php _menu(); ?>
      <div class="center">
      <?php
        for ($x = 99; $x > 0; $x = $x - 2) {
          echo "$x bottles of beer on the wall... <br>";
          echo "$x bottles of beer.. <br>";
          echo "You take ten down, you pass them around... <br>";
          echo ($x - 2) . " bottles of beer on the wall. <br><br>";
        }
      ?>
    </div>
    </main>
  </body>
  <?php _footer(); ?>
</html>

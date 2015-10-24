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
    <?php _menu(); ?>
    <main>
      <div class="center">
      <?php
        for ($x = 99; $x > 0; $x--) {
          echo "$x bottles of beer on the wall... <br>";
          echo "$x bottles of beer.. <br>";
          echo "You take one down, you apss it around... <br>";
          echo ($x - 1) . " bottles of beer on the wall. <br><br>";
        }
      ?>
    </div>
    </main>
  </body>
  <?php _footer(); ?>
</html>

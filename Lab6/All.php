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
      <div class="center">
      <?php
        for ($x = 99; $x > 0; $x--) {
          echo "The number is: $x <br>";
        }
      ?>
    </div>
    </main>
  </body>
  <?php _footer(); ?>
</html>

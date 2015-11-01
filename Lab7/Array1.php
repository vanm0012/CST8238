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
    <link href="css/octicons.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <?php _header(); ?>
    <main>
      <?php _menu(); ?>
      <div class="center content">
      <?php
        $calendar = array("January", "Febuary", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
        print_r($calendar);
      ?>
      <h1>FOR loop</h1>
      <?php
      for ($x=0; $x<count($calendar); $x++)
      {
        echo "Month $x: $calendar($x)";
        echo "<br>";
      }

      sort($calendar);
      echo "<br>";
      echo "<br>";
      echo "<br>";
      print_r($calendar);
      ?>
    </div>
    </main>
  </body>
  <?php _footer(); ?>
</html>

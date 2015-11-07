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
    <title>Assignment 2</title>
    <link href="css/Stylesheet.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
    <link href="css/octicons.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <?php _header(); ?>
    <main>
      <?php _menu(); ?>
      <div class="center">
    <?php
    /* For loop  to create a table */
    echo "<table style='width:100%' border='1'>";

    for($x=0; $x<10; $x=$x+2)
    {
      $y = $x+1;
      echo "<tr>";
      echo "<td bgcolor='#9e9e9e'> $x </td>";
      echo "<td> $y </td>";
      echo "</tr>";
    }

    echo "</table>";

    ?>
      </div>
    </main>
  </body>
  <?php _footer(); ?>
</html>

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
    echo "<br>";
    echo "<br>";
    echo "<br>";

    $q4_str = "This is a test";

    echo strtoupper($q4_str);
    echo strtolower($q4_str);
    echo strlen($q4_str);
    echo str_split($q4_str);
    ?>
      </div>
    </main>
  </body>
  <?php _footer(); ?>
</html>

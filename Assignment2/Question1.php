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
        <div class="center-box">

    <?php

    /* For loop : left aligned */
    for ($x = 11; $x>=1; $x--)
    {
      echo str_repeat("*", $x);
      echo "<br>";
    }

    echo str_repeat("<br>", 5);

    /* while loop : right aligned */
    $x = 11;

    while ($x>=1)
    {
      echo str_repeat("&nbsp;", 12-$x);
      echo str_repeat("*", $x);
      echo "<br>";
      $x--;
    }

    echo str_repeat("<br>", 5);

    /* do-while loop : diamond */
    $a = 1;
    $b = 6;
    do {
      echo str_repeat("&nbsp;", $b);
      echo str_repeat("*", $a);
      echo "<br>";
      $a++;
      $a++;
      $b--;
    } while ($a < 12);

    $a = 11;
    $b = 1;
    do {
      echo str_repeat("&nbsp;", $b);
      echo str_repeat("*", $a);
      echo "<br>";
      $a--;
      $a--;
      $b++;
    } while ($a > 0);

    ?>

      </div>
    </main>
  </body>
  <?php _footer(); ?>
</html>

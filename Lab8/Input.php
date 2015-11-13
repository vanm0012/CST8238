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
    <title>Lab 8</title>
    <link href="css/Stylesheet.css" rel="stylesheet" type="text/css">
    <link href="css/octicons.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <?php _header(); ?>
    <?php _menu(); ?>
    <main>
      <div class="center">
        <?php

        echo '<div style="float:left; width:50%;">';
        echo '<input required type="text" name="fname" placeholder="First Name">';
        echo '<input required type="text" name="lname" placeholder="Last Name">';
        echo '</div>';

        echo '<div style="float:right; width:50%;">';
        echo 'First Name | Last Name';
        echo '</div>';

        ?>
    </div>
    </main>
  </body>
  <?php _footer(); ?>
</html>

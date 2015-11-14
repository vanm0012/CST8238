<?php
session_start();
include("Header.php");
include("Menu.php");
include("Footer.php");
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="author" content="tryton-vanmeer">
    <title>Lab 8</title>
    <link href="css/Stylesheet.css" rel="stylesheet" type="text/css">
    <link href="css/octicons.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700,900' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <?php _header(); ?>
    <?php _menu(); ?>
    <main>
      <div class="center">
      <?php
      echo '<div style="width:50%; margin-left: auto; display: inline-block; font-size: 20px;">';

      echo 'First Name: ', $_SESSION['fname'];
      echo '<br>';
      echo 'Last Name: ', $_SESSION['lname'];
      echo '<br>';
      echo 'Phone Number: ',$_SESSION['pnum'];
      echo '<br>';
      echo 'Position: ', $_SESSION['radio'];
      echo '<br>';
      echo '<br>';
      echo '<span style="text-decoration: underline;">Games</span>';
      echo '<ul>';
      foreach ($_SESSION['games'] as $game)
      {
        echo '<li>', $game, '</li>';
      }
      echo '</ul>';

      echo '</div>';
      ?>
    </div>
    </main>
  </body>
  <?php _footer(); ?>
</html>

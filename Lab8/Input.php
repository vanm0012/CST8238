<!DOCTYPE html>
<?php
include("Header.php");
include("Menu.php");
include("Footer.php");

function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$fname = $lname = $pnum = $radio = $games = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  $fname = test_input($_POST["fname"]);
  $lname = test_input($_POST["lname"]);
  $pnum = test_input($_POST["pnum"]);
  $radio = test_input($_POST["radio"]);
  $games = $_POST["games"];
}
?>

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

        echo '<div style="float:left; width:50%;">';
        echo '<form method="post">';

        /* Text Boxes */
        echo '<div class="input-group">';
        echo '<input required type="text" name="fname">';
        echo '<label for="fname">First Name</label>';
        echo '</div>';

        echo '<div class="input-group">';
        echo '<input required type="text" name="lname">';
        echo '<label for="fname">Last Name</label>';
        echo '</div>';

        echo '<div class="input-group">';
        echo '<input required type="tel" pattern="\d{3}[\-]\d{3}[\-]\d{4}" name="pnum">';
        echo '<label for="fname">Phone Number</label>';
        echo '</div>';

        echo '<br>';

        /* Radio Buttons */
        echo '<div class="input-group">';

        echo '<label class="option-label">';
        echo '<input class="option-input radio" type="radio" name="radio" value="Staff" checked> Staff';
        echo '</label>';
        echo '<br>';

        echo '<label class="option-label">';
        echo '<input class="option-input radio" type="radio" name="radio" value="Student"> Student';
        echo '</label>';
        echo '<br>';

        echo '<label class="option-label">';
        echo '<input class="option-input radio" type="radio" name="radio" value="Faculty"> Faculty';
        echo '</label>';
        echo '<br>';

        echo '</div>';

        echo '<br>';
        echo '<br>';

        echo '<div class="input-group">';

        echo '<label class="option-label">';
        echo '<input class="option-input checkbox" type="checkbox" name="games[]" value="Besiege"> Besiege';
        echo '</label>';
        echo '<br>';

        echo '<label class="option-label">';
        echo '<input class="option-input checkbox" type="checkbox" name="games[]" value="Counter Strike: Global Offensive"> Counter Strike: Global Offensive';
        echo '</label>';
        echo '<br>';

        echo '<label class="option-label">';
        echo '<input class="option-input checkbox" type="checkbox" name="games[]" value="Hotline Miami"> Hotline Miami';
        echo '</label>';
        echo '<br>';

        echo '<label class="option-label">';
        echo '<input class="option-input checkbox" type="checkbox" name="games[]" value="Middle-Earth: Shadow of Mordor"> Middle-Earth: Shadow of Mordor';
        echo '</label>';
        echo '<br>';

        echo '</div>';

        /* Submit and Close Form */
        echo '<br>';
        echo '<input class="teal accent-4 white-text" type="submit" value="Submit">';
        echo '</form>';
        echo '</div>';

        echo '<div style="float:right; width:50%; font-size: 20px;">';

        echo 'First Name: ', $fname;
        echo '<br>';
        echo 'Last Name: ', $lname;
        echo '<br>';
        echo 'Phone Number: ', $pnum;
        echo '<br>';
        echo 'Position: ', $radio;
        echo '<br>';
        echo '<br>';
        echo '<span style="text-decoration: underline;">Games</span>';
        echo '<ul>';
        foreach ($games as $game)
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

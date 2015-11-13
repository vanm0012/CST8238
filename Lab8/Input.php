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

$fname = $lname = $pnum = $radio = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  $fname = test_input($_POST["fname"]);
  $lname = test_input($_POST["lname"]);
  $pnum = test_input($_POST["pnum"]);
  $radio = test_input($_POST["radio"]);
}
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
        echo '<form method="post">';

        /* Text Boxes */
        echo '<div class="input-group">';
        echo '<label for="fname">First Name</label>';
        echo '<input required type="text" name="fname">';
        echo '</div>';

        echo '<input required type="text" name="lname" placeholder="Last Name">';

        echo '<input required type="tel" name="pnum" placeholder="Phone Number">';

        /* Radio Buttons */
        echo '<input type="radio" name="radio" value="Staff" checked> Staff';
        echo '<br>';
        echo '<input type="radio" name="radio" value="Student"> Student';
        echo '<br>';
        echo '<input type="radio" name="radio" value="Faculty"> Faculty';
        echo '<br>';

        /* Submit and Close Form */
        echo '<br>';
        echo '<input class="teal accent-4 white-text" type="submit" value="Submit">';
        echo '</form>';
        echo '</div>';

        echo '<div class="post-text" style="float:right; width:50%;">';

        echo 'First Name: ', $fname;
        echo '<br>';
        echo 'Last Name: ', $lname;
        echo '<br>';
        echo 'Phone Number: ', $pnum;
        echo '<br>';
        echo 'Radio: ', $radio;

        echo '</div>';

        ?>
    </div>
    </main>
  </body>
  <?php _footer(); ?>
</html>

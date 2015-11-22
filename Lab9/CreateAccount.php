<!DOCTYPE html>
<?php
session_start();
include("Header.php");
include("Footer.php");

function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$_SESSION["fname"] = $_SESSION["lname"] = $_SESSION["pnum"] = $_SESSION["snum"] = $_SESSION["pass"] = $_SESSION["email"] = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  $_SESSION["fname"] = test_input($_POST["fname"]);
  $_SESSION["lname"] = test_input($_POST["lname"]);
  $_SESSION["pnum"] = test_input($_POST["pnum"]);
  $_SESSION["snum"] = test_input($_POST["snum"]);
  $_SESSION["pass"] = test_input($_POST["pass"]);
  $_SESSION["email"] = test_input($_POST["email"]);

  $message = "DING";

  echo "<script type='text/javascript'>alert('$message');</script>";
  /*header('Location: ./.php');*/
}
?>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="author" content="tryton-vanmeer">
    <title>Lab 9</title>
    <link href="css/Stylesheet.css" rel="stylesheet" type="text/css">
    <link href="css/octicons.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700,900' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <?php _header(); ?>
    <main>
      <div class="center">
        <?php

        echo '<div style="width:50%; margin-left: auto; display: inline-block; font-size: 20px;">';
        echo '<form method="post">';

        /* Text Boxes */
        echo '<div class="input-group">';
        echo '<input required maxlength="50" type="text" name="fname">';
        echo '<label for="fname">First Name</label>';
        echo '</div>';

        echo '<div class="input-group">';
        echo '<input required maxlength="50" type="text" name="lname">';
        echo '<label for="lname">Last Name</label>';
        echo '</div>';

        echo '<div class="input-group">';
        echo '<input required maxlength="255" type="email" name="email">';
        echo '<label for="email">Email</label>';
        echo '</div>';

        echo '<div class="input-group">';
        echo '<input required type="tel" pattern="\d{3}[\-]\d{3}[\-]\d{4}" name="pnum">';
        echo '<label for="pnum">Phone Number (###-###-####)</label>';
        echo '</div>';

        echo '<div class="input-group">';
        echo '<input required maxlength="11" type="text" name="snum">';
        echo '<label for="snum">Social Insurance Number</label>';
        echo '</div>';

        echo '<div class="input-group">';
        echo '<input required maxlength="60" type="password" name="pass">';
        echo '<label for="pass">Password</label>';
        echo '</div>';

        echo '<br>';

        /* Submit and Close Form */
        echo '<br>';
        echo '<input class="orange accent-4 white-text" type="submit" value="Submit">';
        echo '</form>';
        echo '</div>';
        ?>
    </div>
    </main>
  </body>
  <?php _footer(); ?>
</html>

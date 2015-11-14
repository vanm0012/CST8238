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
      echo '<div style="width:50%; margin-left: auto; display: inline-block; font-size: 20px;">';

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

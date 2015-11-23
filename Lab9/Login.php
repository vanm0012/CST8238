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

$host = 'localhost';
$username = 'vanm0012_Lab9';
$password = 'vanm0012';
$database = 'vanm0012_Lab9';

$invalid_login = False;
$valid_login = False;

$_SESSION["fname"] = $_SESSION["lname"] = $_SESSION["pnum"] = $_SESSION["snum"] = $_SESSION["pass"] = $_SESSION["email"] = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  $_SESSION["email"] = $email = test_input($_POST["email"]);
  $_SESSION["pass"] = $pass = test_input($_POST["pass"]);

  /* DATABASE CHECK */
  $conn = mysqli_connect($host, $username, $password, $database);

  if ($conn == FALSE)
  {
    die("Connection Failed: " . mysqli_connect_error());
  }

  $sql =  "SELECT * FROM persons WHERE (email = '$email')";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);


  if (mysqli_num_rows($result) == 0)
  {
    $invalid_login = True;
  }
  else if ($row["email"] == $email)
  {
    if (password_verify($pass, $row["pass_hash"]))
    {
      $valid_login = True;
    }
    else
    {
      $invalid_login = True;
    }
  }

  mysqli_close($conn);

  if ($valid_login)
  {
    header('Location: ./ViewAllAccounts.php');
  }
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
        echo '<input required maxlength="255" type="email" name="email">';
        echo '<label for="email">Email</label>';
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
        if ($invalid_login)
        {
          echo '<br>';
          echo '<span class="red-text">Invalid Email/Password</span>';
        }
        echo '</div>';
        ?>
    </div>
    </main>
  </body>
  <?php _footer(); ?>
</html>

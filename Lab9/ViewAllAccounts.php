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

if ($_SESSION["valid_login"] == False)
{
  header('Location: ./Login.php');
}

$host = 'localhost';
$username = 'vanm0012_Lab9';
$password = 'vanm0012';
$database = 'vanm0012_Lab9';

/* DATABASE*/
$conn = mysqli_connect($host, $username, $password, $database);

if ($conn == FALSE)
{
  die("Connection Failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM persons";

$result = mysqli_query($conn, $sql);

if ($result == FALSE)
{
  die("Error: " . $sql . "<br>" . mysqli_error($conn));
}

mysqli_close($conn);
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
        echo '<h1>HTML TABLE OF DATABASE</h1>';
        echo '<table width=100%>';
        echo '<tr>';
        echo '<th>PERSON ID</th>';
        echo '<th>FIRST NAME</th>';
        echo '<th>LAST NAME</th>';
        echo '<th>EMAIL</th>';
        echo '<th>TELEPHONE</th>';
        echo '<th>SIN</th>';
        echo '<th>PASSWORD HASH</th>';
        echo '</tr>';
        if (mysqli_num_rows($result) > 0)
        {
          while($row = mysqli_fetch_assoc($result))
          {
            echo '<tr>';
            echo '<td>' . $row["person_id"] . '</td>';
            echo '<td>' . $row["first_name"] . '</td>';
            echo '<td>' . $row["last_name"] . '</td>';
            echo '<td>' . $row["email"] . '</td>';
            echo '<td>' . $row["telephone"] . '</td>';
            echo '<td>' . $row["sin"] . '</td>';
            echo '<td>' . $row["pass_hash"] . '</td>';
            echo '</tr>';
          }
        }
        echo '</table>';
        ?>
    </div>
    </main>
  </body>
  <?php _footer(); ?>
</html>

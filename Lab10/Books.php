<!DOCTYPE html>
<?php
session_start();
include("Header.php");
include("Footer.php");
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
        echo '<h1>Books</h1>';
        echo '<table border="1" width=100%>';
        echo '<tr>';
        echo '<th>Author</th>';
        echo '<th>Title</th>';
        echo '<th>Genre</th>';
        echo '<th>Price</th>';
        echo '<th>Publish Date</th>';
        echo '<th>Description</th>';
        echo '</tr>';
        for($i=0;$i<10;$i++)
        {
          echo '<tr>';
          echo "<td>Gambardella, Matthew</td>";
          echo "<td>XML Developer's Guide</td>";
          echo "<td>Computer</td>";
          echo "<td>44.95</td>";
          echo "<td>2000-10-01</td>";
          echo "<td>An in-depth look at creating applications with XML.</td>";
          echo '</tr>';
        }
        echo '</table>';
        ?>
    </div>
    </main>
  </body>
  <?php _footer(); ?>
</html>

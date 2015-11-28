<!DOCTYPE html>
<?php
session_start();
include("Header.php");
include("Footer.php");

$xml = file_get_contents("http://www.rejaul.com/CST8238/Lab10/Books.xml");
$catalog = new DOMDocument();
$catalog->loadXML($xml);
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
        foreach($catalog->getElementsByTagName('book') as $book)
        {
          echo '<tr>';
          echo "<td> . $book->nodeValue . </td>";
          echo "<td> . $book->getAttribute('title') . </td>";
          echo "<td> . $book->getAttribute('genre') . </td>";
          echo "<td> . $book->getAttribute('price') . </td>";
          echo "<td> . $book->getAttribute('publish_date') . </td>";
          echo "<td> . $book->getAttribute('descreiption') . </td>";
          echo '</tr>';
        }
        echo '</table>';
        ?>
    </div>
    </main>
  </body>
  <?php _footer(); ?>
</html>

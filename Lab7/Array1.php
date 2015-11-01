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
    <title>Lab 6</title>
    <link href="css/Stylesheet.css" rel="stylesheet" type="text/css">
    <link href="css/octicons.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <?php _header(); ?>
    <main>
      <?php _menu(); ?>
      <div class="center content">
      <?php
        $calendar = array("January", "Febuary", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
        print_r($calendar);
      ?>
      <h1>FOR loop</h1>
      <?php
      for ($x=0; $x<count($calendar); $x++)
      {
        $num = $x+1;
        echo "Month $num: $calendar[$x]";
        echo "<br>";
      }

      sort($calendar);
      echo "<br>";
      echo "<br>";
      echo "<br>";
      print_r($calendar);
      ?>

      <h1>FOREACH loop</h1>
      <?php
        foreach ($calendar as &$month)
        {
          $num = array_search($month, $calendar)+1;
          echo "Month $num: $month";
          echo "<br>";
        }
        echo "<br>";
        echo "<br>";
        echo "<br>";
      ?>

      <h1>WHILE loop, SWITCH statement</h1>
      <?php
        $x = 0;
        while ($x < 11)
        {
          switch ($x)
          {
            case 0:
              echo "Month $x: $calendar[$x] has 31 days";
              break;
            case 1:
              echo "Month $x: $calendar[$x] has 28, or 29 days";
              break;
            case 2:
              echo "Month $x: $calendar[$x] has 31 days";
              break;
            case 3:
              echo "Month $x: $calendar[$x] has 30 days";
              break;
            case 4:
              echo "Month $x: $calendar[$x] has 31 days";
              break;
            case 5:
              echo "Month $x: $calendar[$x] has 30 days";
              break;
            case 6:
              echo "Month $x: $calendar[$x] has 31 days";
              break;
            case 7:
              echo "Month $x: $calendar[$x] has 30 days";
              break;
            case 8:
              echo "Month $x: $calendar[$x] has 31 days";
              break;
            case 9:
              echo "Month $x: $calendar[$x] has 30 days";
              break;
            case 10:
              echo "Month $x: $calendar[$x] has 330 days";
              break;
            case 11:
              echo "Month $x: $calendar[$x] has n days";
              break;
          }

          echo "<br>";
          $x++;
        }
      ?>
    </div>
    </main>
  </body>
  <?php _footer(); ?>
</html>

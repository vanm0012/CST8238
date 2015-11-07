<!DOCTYPE html>
<?php
include("Header.php");
include("Menu.php");
include("Footer.php");
?>
<?php
function calc_average($arr)
{
  $arr_sum = 0;
  foreach($arr as $val)
  {
    $arr_sum = $arr_sum + $val;
  }
  $arr_avg = $arr_sum / count($arr);

  echo "The average is: $arr_avg <br>";
}
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="author" content="tryton-vanmeer">
    <title>Assignment 2</title>
    <link href="css/Stylesheet.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
    <link href="css/octicons.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <?php _header(); ?>
    <main>
      <?php _menu(); ?>
      <div class="center-box">
    <?php
    $q3_array1 = array(9, 3, 1, 0, 99, 2, 5, 6, 32, 1 ,55);
    $q3_array2 = array(9, 18, 1, 0, 23, 22, 4, 6, 5, 32, 55);

    calc_average($q3_array1);
    ?>
      </div>
    </main>
  </body>
  <?php _footer(); ?>
</html>

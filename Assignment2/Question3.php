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
function find_largest($arr)
{
  $arr_largest;
  $x = 0;
  $y = $x;

  foreach ($arr as $val)
  {
    if ($arr_largest < $val)
    {
      $arr_largest = $val;
      $y = $x;
    }
    $x++;
  }

  echo "The highest value is at index: $y <br>";
}
function find_matching($arr1, $arr2)
{
  $curr_index = 0;
  foreach ($arr1 as $val)
  {
    if ($arr2[$curr_index] == $val)
    {
      echo "The values at $curr_index match. <br>";
    }
    $curr_index++;
  }
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
    find_largest($q3_array1);
    ?>
      </div>
    </main>
  </body>
  <?php _footer(); ?>
</html>

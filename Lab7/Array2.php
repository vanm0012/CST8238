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
      <div class="center">
      <ol class="bold">
        <li><b>What is the difference between a numeric and associative array?</b>
          <p>A numeric array uses indexs, which are numeric of course, and values are accessed by #array[index].
          Associative arrays use keys and function like a dictionary. Values are accessed by $array['key']</p>
        </li>
        <li><b>What is the main benefit of array keyword?</b>
          <p></p>
        </li>
        <li><b>What if the difference between foreach and each?</b>
          <p>In PHP, foreach is a method to loop through an entire array.
          each only returns the current key/value pair, then advances the array cursor.
        So, for the 'each' command, you would have to use it for every value you wish to access.</p>
        </li>
        <li><b>How can you create a mulidimensional array?</b>
          <p>To create a multidimensional array in PHP, you would create an array of arrays.
          For example: $array = array(array(1,2,3), array("a","b","c"), array("i","ii","iii")).</p>
        </li>
        <li><b>How can you determine the number of elements there are in an array?</b>
          <p>count($array) will return a count of items in an array in PHP.</p>
        </li>
        <li><b>What is the purpose of the explode function?</b>
          <p>To split a string into substrings a defined by a delimiter.</p>
        </li>
        <li><b>How can you set PHP's internal pointer into an array back to the first element of the array?</b>
          <p>'reset(&amp;$array)' will return internal pointer back to the start, in PHP.</p>
        </li>
      </ol>
    </div>
    </main>
  </body>
  <?php _footer(); ?>
</html>

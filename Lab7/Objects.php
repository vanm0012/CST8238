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
        <li><b>What is the main benefir of using a function?</b>
          <p>A function allows you to write a reusable block of code.</p>
        </li>
        <li><b>How many values can a function return?</b>
          <p>In PHP you can only return one value, but you can return an array
          which in turn lets you return multiple values.</p>
        </li>
        <li><b>What is the difference between accessing a variable by name and by reference?</b>
          <p>By passing a variable by name, you are doing so by value, so in a function it would not change.
          If you pass a variable by referencem, you can change its value in a function.</p>
        </li>
        <li><b>What is the meaning of "scope" in PHP?</b>
          <p>Scope is the context the variable is defined.</p>
        </li>
        <li><b>How can you incorporate one PHP file within another?</b>
          <p>By using the include function. Example: include("Footer.php")</p>
        </li>
        <li><b>How is an object different from a function?</b>
          <p>A function is a reusable block of code that can be called anytime.
          An object is a predefined set of properties and functions that ussually act on these properties.
          An object as a whole must be initiated. Each different instance of an object can have
        different values for their properties</p>
        </li>
        <li><b>How do you create a new object in PHP?</b>
          <p>To create a new object: '$new_object = new object;'</p>
        </li>
        <li><b>What syntax would you use to create a sublass from an existing one?</b>
          <p>'class Bar extends Foo {...}'</p>
        </li>
        <li><b>How can you call an initializing piece of code when an object is created?</b>
          <p>'$new_object->function("arg")'</p>
        </li>
        <li><b>Why is it a good idea to explicitly declare proerties within a class?</b>
          <p>If you create an object without declaring it's properties, you'll grey-text
          errors if you try to access them.</p>
        </li>
      </ol>
    </div>
    </main>
  </body>
  <?php _footer(); ?>
</html>

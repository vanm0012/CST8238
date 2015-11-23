<?php
include("Menu.php");

function _header()
{
  echo '<div class="header blue darken-2 white-text">';
  echo '<h1>Tryton Van Meer | 040790151 | Lab 9 | PHP and MySQL</h1>';
  echo '<nav>';
          _menu();
  echo  '</nav>';
  echo  '</div>';
}
?>

<?php
include("Menu.php");

function _header()
{
  echo '<div class="header green darken-2 white-text">';
  echo '<h2>Tryton Van Meer | 040790151 | Lab 10 | PHP and XML</h2>';
  echo '<nav>';
          _menu();
  echo  '</nav>';
  echo  '</div>';
}
?>

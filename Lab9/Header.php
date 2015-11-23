<?php
include("Menu.php");

function _header()
{
  echo '<header class="blue darken-2 white-text">Tryton Van Meer | 040790151 | Lab 9 | PHP and MySQL</header>';
  echo '<nav class="blue darken-2 white-text">';
          _menu();
  echo  '</nav>';
}
?>

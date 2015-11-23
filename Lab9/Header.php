<?php
include("Menu.php");

function _header()
{
  echo '<header style="text-align:left;">Tryton Van Meer | 040790151 | Lab 9 | PHP and MySQL</header>';
  echo '<nav class="blue darken-2 white-text center">';
          _menu();
  echo  '</nav>';
}
?>

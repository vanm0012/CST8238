<?php
include("Menu.php");

function _header()
{
  echo '<div class="header-top blue darken-2 white-text">';
  echo '<header>Tryton Van Meer | 040790151 | Lab 9 | PHP and MySQL</header>';
  echo '<nav>';
          _menu();
  echo  '</nav>';
  echo  '</div>';
}
?>

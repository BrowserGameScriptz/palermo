<?php
require "class/config.php";
require "class/templates.php";

$_PAGE['title'] = "Mord In Palermo";
$_PAGE['player'] = array('Martin', 'Karim', 'Ferdi', 'Jan', 'Jörg');

include "templates/header.php";
include "templates/game.php";
include "templates/game_menu.php";
include "templates/footer.php";

 ?>

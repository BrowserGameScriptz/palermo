<?php
require "class/config.php";
require "class/templates.php";

$_PAGE['title'] = "Mord In Palermo";
$_PAGE['player'] = array('Martin', 'Karim', 'Ferdi', 'Jan', 'Jörg');

include "templates/header_game.php";
include "templates/game.php";
include "templates/footer.php";

 ?>

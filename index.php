<?php
require "class/config.php";
require "class/templates.php";

$_PAGE['title'] = "Mord In Palermo";




include "templates/header_site.php";

if (!array_key_exists('p', $_GET)) {
  $_GET['p'] =0;
}

switch(intval($_GET['p'])) {
  case 2:
    include "templates/rules.php";
    break;

  case 3:
    include "templates/aboutus.php";
    break;

  case 4:
    include "templates/impressum.php";
    break;

  default:
    include "templates/landing.php";
    break;
}

include "templates/menu.php";
include "templates/footer.php";
?>

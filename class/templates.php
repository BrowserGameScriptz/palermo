<?php

class Template
{

  static function getUrl($filename) {
    global $_CONFIG;
    return $_CONFIG['URL'] . $filename;
  }
}



 ?>


<?php


/**
 * This class contains some often used tools
 */
class Toolbelt {


    /**
     * generates a random string with a given length
     * @param  integer $length length of the random string
     * @param  string $q (optional) string of available characters
     * @return string  the random string
     */

    public static function genCode($length = 5, $q = "0987654321abcdefghijklmnopqrstuvwxyz") {
      $r = "";

      if ($length <= 0 || !is_numeric($length))
        throw new \Exception("Invalid Parameter", 1);

      // build random string
      for($i=0; $i < $length; $i++) {
        $x = random_int(0, strlen($q)-1);
        $r .= $q[$x];
      }

      return $r;
    }
}


?>

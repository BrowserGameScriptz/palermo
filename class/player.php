<?php

require_once "config.php";
require_once "database.php";


class Player {
  private $name;
  private $code;
  private $role;


  /**
   * creates a new, empty player handle
   * @return Player returned player
   */
  public static function createNewPlayer() {
    $player = new Player();
    $player->code = self::getNewPlayerCode();
    return $player;
  }


  /**
   * Generates a new unused player code
   * @return string player code
   */
  private static function getNewPlayerCode() {
    global $_CONFIG;

    $player_code = "";

    do {
      $player_code = Toolbelt::genCode($_CONFIG['PLAYERCODE_LENGTH']);
      $result = palermoDb::get()->query("SELECT id FROM player WHERE code='$player_code'");
    } while($result->num_rows > 0);

    return $player_code;
  }


  /**
   * Plants the player code inside the users cookies
   * @return void
   */
  public function plantPlayerCode() {
    setcookie('pcode', $this->code, 60*60*24*7);
  }

}

 ?>

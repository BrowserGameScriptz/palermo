<?php

require_once "config.php";
require_once "database.php";
require_once "toolbelt.php";




/** GAME CLASS
 *  Handles the game object
 *
 */


class Game {
  private $id;
  private $spione = 10;
  private $aerzte = 20;
  private $moerder = 30;
  private $code;
  private $created_at;
  private $lastround_at;


  /**
   * Creates a new game
   * @return Game the created Game
   */
  public static function createNewGame()
  {

    $game = new Game();
    $game->id = 0;
    $game->code = self::getNewGameCode();;
    $game->created_at = time();
    $game->lastround_at = $game->created_at;


    $result = palermoDb::get()->query(
      "INSERT INTO game SET
        code='" . $game->code . "',
        created_at='" . $game->created_at . "',
        lastround_at='" . $game->lastround_at . "'"
      );

    $game->id = palermoDb::get()->insert_id;

    return $game;
  }


  /**
   * Generates an unused game code. It generates a random game code and checks
   * if this code has been used before. If not, the code will be returned.
   * If the code has been used before, it will generate a new code.
   * @return string unused game code
   */
  private static function getNewGameCode()
  {
    global $_CONFIG;

    $game_code = "";

    do {
      $game_code = Toolbelt::genCode($_CONFIG['GAMECODE_LENGTH'], "0987654321");
      $result = palermoDb::get()->query("SELECT id FROM game WHERE code='$game_code'");
    } while($result->num_rows > 0);

    return $game_code;
  }


  /**
   * Adds a player to the game
   * @param Player $player The player to be added to the game
   */
  public function addPlayer(Player $player) {
    palermoDb::get()->query("INSERT INTO player SET code='" . $player->code . "', game_id='" . $this->id . "', is_admin='0'");
  }
}

 ?>

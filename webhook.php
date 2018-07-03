<?php
require_once "class/config.php";
require_once "class/database.php";
require_once "class/game.php";
require_once "class/player.php"



if (array_key_exists($_POST, 'request'))
{

  if ($_POST['request'] == 'newgame')
  {

    //todo: leave old game if possible

    $game = Game::createNewGame();
    $player = Player::createNewPlayer();

    $game->addPlayer($player);
    $player->plantPlayerCode();

    //todo: send redirect command back
  }

  else if ($_POST['request'] == 'joingame')
  {

    //todo: leave old game if possible

    //check if game is joinable
    // $game = Game::loadGame();

    $player = Player::createNewPlayer();

    $game->addPlayer($player);
    $player->plantPlayerCode();

    //todo: send redirect command back
  }

}
?>

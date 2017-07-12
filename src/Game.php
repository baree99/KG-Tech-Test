<?php
// Understands how to operate the gameplay

class Game
{
  public $players = array();
  public $dealer;

  function __construct($numberOfPlayers = 4)
  {
    require_once './src/Dealer.php';
    $this->dealer = new Dealer();
    $this->createPlayers($numberOfPlayers);
  }

  public function newHand()
  {
    $this->dealer->shuffleDeck();
    $this->dealCards();
  }

  private function dealCards($numberOfCardsPerPlayer = 7)
  {
    for ($i = 1; $i <= $numberOfCardsPerPlayer; $i++) {
      $this->dealOneCardToEveryPlayer();
    }
  }

  private function createPlayers($numberOfPlayers)
  {
    require_once './src/Player.php';
    for ($i = 1; $i <= $numberOfPlayers; $i++)
    {
      $player = new Player();
      array_push($this->players, $player);
    }
  }

  private function dealOneCardToEveryPlayer()
  {
    foreach ($this->players as $player) {
      $player->receiveCard($this->dealer->deal());
    }
  }
}
?>

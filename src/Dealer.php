<?php
// Understands how to handle a Deck

class Dealer
{
  public $deck;

  function __construct()
  {
    require_once './src/Deck.php';
    $this->deck = new Deck();
  }
  public function shuffleDeck()
  {
    shuffle($this->deck->cards);
  }

  public function deal()
  {
    return array_shift($this->deck->cards);
  }

}
 ?>

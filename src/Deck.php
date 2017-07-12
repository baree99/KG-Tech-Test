<?php
// Understands how to create a deck

class Deck
{
  public $cards;
  private $suits = array('d', 's', 'c', 'h');
  private $values = array('K', 'Q', 'J', '10', '9', '8', '7', '6', '5', '4', '3', '2', 'A');

  function __construct()
  {
    $this->cards = $this->createCards();
  }

  private function createCards()
  {
    $cards = array();
    foreach ($this->suits as $suit) {
      foreach ($this->values as $value) {
        array_push($cards, $value . $suit);
      }
    }
    return $cards;
  }
}
?>

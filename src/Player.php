<?php
// Understands how to receive cards

class Player
{
  public $cards = array();

  public function receiveCard($card)
  {
    array_push($this->cards, $card);
  }
}
?>

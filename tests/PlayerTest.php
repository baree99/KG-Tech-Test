<?php
use PHPUnit\Framework\TestCase;
require './src/Player.php';

class PlayerTest extends TestCase
{
  public function testPlayerCards()
  {

    $player = new Player();
    $testCard = 'Kd';
    $player->receiveCard($testCard);

    $this->assertEquals($testCard, $player->cards[0]);

  }
}
?>

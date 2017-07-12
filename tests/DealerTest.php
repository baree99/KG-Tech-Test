<?php
use PHPUnit\Framework\TestCase;
require './src/Dealer.php';

class DealerTest extends TestCase
{
  public function testShuffleDeck()
  {
    $dealer = new Dealer();
    $deckBeforeShuffle = $dealer->deck->cards;
    $dealer->shuffleDeck();
    $deckAfterShuffle = $dealer->deck->cards;

    $this->assertNotEquals($deckBeforeShuffle, $deckAfterShuffle);

  }

  public function testDeal()
  {
    $dealer = new Dealer();
    $firstCardInDeck = 'Kd';
    $cardsRemainingAfterDeal = 51;

    $this->assertEquals($firstCardInDeck, $dealer->deal());

    $this->assertCount($cardsRemainingAfterDeal, $dealer->deck->cards);
  }
}
?>

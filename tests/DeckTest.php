<?php
use PHPUnit\Framework\TestCase;
require './src/Deck.php';

 class DeckTest extends TestCase
 {
     public function testCards()
     {
       // a deck has 52cards, card on the top is King of diamonds
       // card on the bottom is Ace of hearts
        $deck = new Deck();
        $this->assertEquals(count($deck->cards), 52);

        $this->assertEquals($deck->cards[0], 'Kd');
        $this->assertEquals($deck->cards[51], 'Ah');
     }
 }
 ?>

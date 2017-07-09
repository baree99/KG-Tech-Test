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
        $this->assertEquals(52, count($deck->cards));

        $this->assertEquals('Kd', $deck->cards[0]);
        
        $this->assertEquals('Ah', $deck->cards[51]);
     }
 }
 ?>

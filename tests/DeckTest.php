<?php
use PHPUnit\Framework\TestCase;
require './src/Deck.php';

 class DeckTest extends TestCase
 {
     public function testDeckCards()
     {
        $deck = new Deck();
        $numberOfCards = 52;
        $firstCard = 'Kd';
        $lastCard = 'Ah';

        $this->assertCount($numberOfCards, $deck->cards);

        $this->assertEquals($firstCard, $deck->cards[0]);

        $this->assertEquals($lastCard, $deck->cards[51]);
     }
 }
 ?>

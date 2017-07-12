<?php
use PHPUnit\Framework\TestCase;
require './src/Game.php';

 class GameTest extends TestCase
 {
     public function testGame()
     {
        $game = new Game();
        $numberOfPlayers = 4;

        $this->assertCount($numberOfPlayers, $game->players);
        $this->assertInstanceOf('Player', $game->players[0]);

        $lastCardInDeckBeforeShuffle = 'Ah';

        $this->assertEquals($lastCardInDeckBeforeShuffle, $game->dealer->deck->cards[51]);

        $game->newHand();

        $this->assertNotEquals($lastCardInDeckBeforeShuffle, $game->dealer->deck->cards[23]);

        $cardsInHandOfPlayer = 7;

        $this->assertCount($cardsInHandOfPlayer, $game->players[0]->cards);
        $this->assertCount($cardsInHandOfPlayer, $game->players[1]->cards);
        $this->assertCount($cardsInHandOfPlayer, $game->players[2]->cards);
        $this->assertCount($cardsInHandOfPlayer, $game->players[3]->cards);
     }
 }
 ?>

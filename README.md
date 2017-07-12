# Kurt Geiger Tech Test - Peter Barcsak

## Approach
* In order to make the game easily extendable/changeable, some of the rules were implemented with dependency injection
* Giving single responsibilities to each functions makes the code easily reusable when necessarily
* Creating the deck from values and suits can reduce mistakes and ease the way to change the cards

## Features
* Standard 52-card deck
* The game has 4 players by default
* The deck arrives in perfect sequence(bottom &#127153; -> top &#127182;)
* The cards are shuffled when a new hand starts
* In a new hand 7 cards are dealt to the players by default

## Objects
```
Deck ---> Dealer ---> Game <--- Player
```

## Installing dependencies
```
composer install
```

## Running tests
```
./vendor/bin/phpunit tests
```

## How the code is used
```
Interactive mode enabled

php > require_once './src/Game.php';
php > $game = new Game();
php > print_r($game->players);
Array
(
    [0] => Player Object
        (
            [cards] => Array
                (
                )

        )

    [1] => Player Object
        (
            [cards] => Array
                (
                )

        )

    [2] => Player Object
        (
            [cards] => Array
                (
                )

        )

    [3] => Player Object
        (
            [cards] => Array
                (
                )

        )

)
php > print_r($game->dealer->deck->cards);
Array
(
    [0] => Kd
    [1] => Qd
    [2] => Jd
    [3] => 10d
    [4] => 9d
    [5] => 8d
    [6] => 7d
    [7] => 6d
    [8] => 5d
    [9] => 4d
    [10] => 3d
    [11] => 2d
    [12] => Ad
    [13] => Ks
    [14] => Qs
    [15] => Js
    [16] => 10s
    [17] => 9s
    [18] => 8s
    [19] => 7s
    [20] => 6s
    [21] => 5s
    [22] => 4s
    [23] => 3s
    [24] => 2s
    [25] => As
    [26] => Kc
    [27] => Qc
    [28] => Jc
    [29] => 10c
    [30] => 9c
    [31] => 8c
    [32] => 7c
    [33] => 6c
    [34] => 5c
    [35] => 4c
    [36] => 3c
    [37] => 2c
    [38] => Ac
    [39] => Kh
    [40] => Qh
    [41] => Jh
    [42] => 10h
    [43] => 9h
    [44] => 8h
    [45] => 7h
    [46] => 6h
    [47] => 5h
    [48] => 4h
    [49] => 3h
    [50] => 2h
    [51] => Ah
)
php > $game->newHand();
php > print_r($game->players);
Array
(
    [0] => Player Object
        (
            [cards] => Array
                (
                    [0] => Js
                    [1] => Kh
                    [2] => 7d
                    [3] => 2s
                    [4] => 8c
                    [5] => 5h
                    [6] => 8d
                )

        )

    [1] => Player Object
        (
            [cards] => Array
                (
                    [0] => 2h
                    [1] => 9s
                    [2] => Ah
                    [3] => 9c
                    [4] => 5s
                    [5] => 7c
                    [6] => Ad
                )

        )

    [2] => Player Object
        (
            [cards] => Array
                (
                    [0] => 10c
                    [1] => Ac
                    [2] => Kc
                    [3] => Ks
                    [4] => Qc
                    [5] => 10s
                    [6] => 3d
                )

        )

    [3] => Player Object
        (
            [cards] => Array
                (
                    [0] => Jd
                    [1] => Jh
                    [2] => 2d
                    [3] => 9h
                    [4] => 10h
                    [5] => As
                    [6] => Jc
                )

        )

)
php > print_r($game->dealer->deck->cards);
Array
(
    [0] => 7h
    [1] => 8h
    [2] => 3s
    [3] => 6c
    [4] => 5c
    [5] => 4h
    [6] => 9d
    [7] => 8s
    [8] => 4c
    [9] => Kd
    [10] => 4d
    [11] => 3h
    [12] => 7s
    [13] => 6s
    [14] => 4s
    [15] => 6h
    [16] => Qs
    [17] => 5d
    [18] => Qd
    [19] => 3c
    [20] => 2c
    [21] => Qh
    [22] => 6d
    [23] => 10d
)
```

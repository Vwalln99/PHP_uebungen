<?php
function cardValue($card)
{
    return match ($card) {
        'König', 'Dame', 'Bube', '10' => 10,
        'Ass' => (rand(0, 1) == 1) ? 11 : 1,
        default => intval($card),
    };
}

function drawCard()
{
    $deck = [
        ['2', 4], ['3', 4], ['4', 4], ['5', 4], ['6', 4], ['7', 4], ['8', 4], ['9', 4], ['10', 4],
        ['König', 4], ['Dame', 4], ['Bube', 4], ['Ass', 4]
    ];

    $index = array_rand($deck);

    $card = $deck[$index][0];
    $deck[$index][1]--;

    if ($deck[$index][1] === 0) {
        array_splice($deck, $index, 1);
    }
    return $card;
}

function playBlackJack()
{
    $playerScore = 0;
    $dealerScore = 0;


    for ($round = 1; $round <= 5; $round++) {

        $playerCard1 = drawCard();
        $playerCard2 = drawCard();
        echo "Spieler Karte 1: $playerCard1 <br>";
        echo "Spieler Karte 2: $playerCard2 <br>";
        $playerScore = cardValue($playerCard1) + cardValue($playerCard2);
        echo "Spieler Punktzahl: $playerScore <br>";

        $dealerCard1 = drawCard();
        $dealerCard2 = drawCard();
        echo "Dealer Karte 1: $dealerCard1 <br>";
        echo "Dealer Karte 2: $dealerCard2 <br>";
        $dealerScore = cardValue($dealerCard1) + cardValue($dealerCard2);
        echo "Dealer Punktzahl: $dealerScore<br>";


        $result = match (true) {
            $playerScore > 21 && $dealerScore > 21 => "Unentschieden in Runde $round",
            $playerScore > 21 => "Dealer gewinnt Runde $round",
            $dealerScore > 21 => "Spieler gewinnt Runde $round",
            $playerScore > $dealerScore => "Spieler gewinnt Runde $round",
            $playerScore < $dealerScore => "Dealer gewinnt Runde $round",
            default => "Unentschieden in Runde $round",
        };

        echo $result . "<br>";
    }
    $winner = match (true) {
        $playerScore > $dealerScore => "Spieler",
        $playerScore < $dealerScore => "Dealer",
        default => "Unentschieden",
    };

    echo "Gesamtsieger: $winner <br>";
}

playBlackJack();


<?php

$suits = ['Hearts','Diamonds','Spades','Clubs'];
$cards = [
    '1' => 2,
    '2' => 2,
    '3' => 3,
    '4' => 4,
    '5' => 5,
    '6' => 6,
    '7' => 7,
    '8' => 8,
    '9' => 9,
    '10' => 10,
    'Jack' => 10,
    'Queen' => 10,
    'King' => 10,
    'Ace' => 11
];

function createDeck(array $suits, array $cards): array {
    $deck = [];
    foreach($suits as $suit) {
        foreach($cards as $name => $score) {
            $deck[] = [
                'card' => "$name of $suit",
                'score' => $score
            ];
        }
    }
    return $deck;
}

function playBlackjack(array $deck) {

    shuffle($deck);
    $playerCardOne = array_pop($deck);
    $playerCardTwo = array_pop($deck);
    $computerCardOne = array_pop($deck);
    $computerCardTwo = array_pop($deck);

    $playerCards = [];
    $computerCards = [];
    array_push($playerCards, $playerCardOne, $playerCardTwo);
    array_push($computerCards, $computerCardOne, $computerCardTwo);

    $playerCardType = 'Players first card was ' . $playerCardOne['face'] . ' of ' . $playerCardOne['suit'] . ' and there second card was ' . $playerCardTwo['face'] . ' of ' . $playerCardTwo['suit'];
    $computerCardType = 'Computer first card was ' . $computerCardOne['face'] . ' of ' . $computerCardOne['suit'] . ' and there second card was ' . $computerCardTwo['face'] . ' of ' . $computerCardTwo['suit'];

    echo "<p>$playerCardType</p>";
    echo "<p>$computerCardType</p>";

    $playerScore = $playerCards[0]['score'] + $playerCards[1]['score'];
    $computerScore = $computerCards[0]['score'] + $computerCards [1]['score'];

    echo '<p> Player score is: ' . $playerScore . '</p>';
    echo '<p> Computer score is: ' . $computerScore . '</p>';

    if ($playerScore > 21) {
        echo '<p>You have gone bust :( skynet wins again </p>';
    } else if ($computerScore > 21) {
        echo '<p>Skynet has gone bust! You win</p>';
    } else if ($playerScore > $computerScore) {
        echo '<p> You beat skynet well done!</p>';
    } else if ($playerScore < $computerScore) {
        echo '<p> Oh no the computer has won, skynet is real!';
    } else if ($playerScore === $computerScore) {
        echo '<p> Its a draw! </p>';
    }
}

playBlackjack(createDeck($suits,$cards));



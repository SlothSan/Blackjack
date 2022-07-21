
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

function drawCards(array $deck): array {
    $drawnCards = [];
    shuffle($deck);
    for($i = 4; $i > 0; $i--){
        $drawnCards[] = array_pop($deck);
    }
    return $drawnCards;
}

function getScores(array $drawnCards): array {
    $scores[0] = $drawnCards[0]['score'];
    $scores[1] = $drawnCards[1]['score'];
    $scores[2] = $drawnCards[2]['score'];
    $scores[3] = $drawnCards[3]['score'];
    return $scores;
}



function playBlackjack(array $suits, array $cards) {
    $drawnCards = drawCards(createDeck($suits,$cards));
    echo "<p>Players first card was " . $drawnCards[0]['card'] . " and their second card was " . $drawnCards[1]['card'] . "</p>";
    echo "<p>Computers first card was " . $drawnCards[2]['card'] . " and their second card was " . $drawnCards[3]['card'] . "</p>";
    $scores = getScores($drawnCards);
    $playerScore = ($scores[0] + $scores[1]);
    $computerScore = ($scores[2] + $scores[3]);
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

playBlackjack($suits, $cards);



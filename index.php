<?php

function createDeck(): array {
    $suits = ['Diamonds','Hearts','Spades','Clubs'];
    $faces = ['1','2','3','4','5','6','7','8','9','10','Jack','Queen','King','Ace'];
    $scores = [1,2,3,4,5,6,7,8,9,10,10,10,10,11];
    foreach($suits as $suit) {
        $deck = array_fill_keys($suits, $suit);
    }


    // foreach($suits as $suit) {
    //         $deck[] = array('suit' => $suit);
    //     foreach($faces as $face) {
    //         $deck[] = array('face' => $face);
    //         foreach($scores as $score) {
    //             $deck[] = array("score" => $score);
    //         }
    //     }
    // }

    var_dump($deck);
    return $deck;

}
function playBlackjack() {
$deck = [
    [
        'suit' => 'diamonds',
        'face' => '2',
        'score' => 2
    ],
    [
        'suit' => 'diamonds',
        'face' => '3',
        'score' => 3
    ],
    [
        'suit' => 'diamonds',
        'face' => '4',
        'score' => 4
    ],
    [
        'suit' => 'diamonds',
        'face' => '5',
        'score' => 5
    ],
    [
        'suit' => 'diamonds',
        'face' => '6',
        'score' => 6
    ],
    [
        'suit' => 'diamonds',
        'face' => '7',
        'score' => 7
    ],
    [
        'suit' => 'diamonds',
        'face' => '8',
        'score' => 8
    ],
    [
        'suit' => 'diamonds',
        'face' => '9',
        'score' => 9
    ],
    [
        'suit' => 'diamonds',
        'face' => '10',
        'score' => 10
    ],
    [
        'suit' => 'diamonds',
        'face' => 'Jack',
        'score' => 10
    ],
    [
        'suit' => 'diamonds',
        'face' => 'Queen',
        'score' => 10
    ],
    [
        'suit' => 'diamonds',
        'face' => 'king',
        'score' => 10
    ],
    [
        'suit' => 'diamonds',
        'face' => 'ace',
        'score' => '11'
    ]
];

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

playBlackjack();


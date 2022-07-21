
<?php

function createSuit(array $suit): array {
    $deck = [];
    $suits = ['heats','diamonds','spades','clubs'];
    $faces = ['1','2','3','4','5','6','7','8','9','10','Jack','Queen','King','Ace'];
    $scores = [2,3,4,5,6,7,8,9,10,10,10,10,11];
    

    return $deck;
}

// createSuit('hearts');

// function createDeck(): array {
//     $suits = ['clubs', 'hearts', 'spades', 'diamonds'];
//     $numbers = [
//         'ace' => 11,
//         2 => 2,
//         3 => 3,
//         4 => 4,
//         5 => 5,
//         6 => 6,
//         7 => 7,
//         8 => 8,
//         9 => 9,
//         10 => 10,
//         'jack' => 10,
//         'queen' => 10,
//         'king' => 10
//     ];
//     $deck = [];
//     foreach($suits as $suit) {
//         foreach($numbers as $name => $score) {
//             //add to the deck
//             $deck[] = [
//                  'card' => "$name of $suit",
//                 'score' => $score
//             ];
//         }
//     }
//     return $deck;
// }

// foreach($data as $key=>$val) {
//     // Use $key as an index, or...

//     // ... manage the index this way..
//     echo "Index is $index\n";
//     $index++;
// $data = array_merge($data, array("cat"=>"wagon","foo"=>"baar"));
// }

function createDeck(): array {
    $suits = ['Diamonds','Hearts','Spades','Clubs'];
    $faces = ['2','3','4','5','6','7','8','9','10','Jack','Queen','King','Ace'];
    $scores = [2,3,4,5,6,7,8,9,10,10,10,10,11];

    // // for($i = 14; $i > 0; $i--) {
    // //     $deck[$count]['suit'] = $suits[0];
    // //     $deck[$count]['face'] = array_pop($faces);
    // //     $deck[$count]['score'] = $scores[$i];
    // // }

    // // for($i = 14; $i > 0; $i--) {
    // //     $deck[$count]['suit'] = $suits[0];
    // //     $deck[$count]['face'] = $faces[$count];
    // //     $deck[$count]['score'] = $scores[$count];
    // }

    // // foreach($suits as $suit) {
    // //         $deck[] = array('suit' => $suit);
    // //     foreach($faces as $face) {
    // //         $deck[] = array('face' => $face);
    // //         foreach($scores as $score) {
    // //             $deck[] = array("score" => $score);
    // //         }
    // //     }
    // // }

    return $deck;

}

$deck = createDeck();

echo '<br>';

print_r($deck);

// foreach ($suits as $suit)

// {

// foreach ($cards as $card)

// {

// $deck[ ] = array ("Card" => $card, "Suit" => $suit);

// }

// }



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

// playBlackjack();


//
//echo 'Hello World';
//
//$firstName = 'Mike';
//
//echo '<marquee>' . $firstName . '</marquee>';
//echo "<marquee>$firstName</marquee>";
//
//$birthYear = 1993;
//$birthMonth = 6;
//$birthDay = 12;
//
//$sumOfBirth = $birthYear + $birthMonth + $birthDay;
//
//$heading = '<h2>';
//$heading .= 'The sum of my birthdate is ';
//$heading .= $sumOfBirth;
//$heading .= '</h2>';
//
//echo $heading;
//
//$myName ='Harry';
//
//if ($myName === 'Mike') {
//    echo "<p>Hello is it $myName you are looking for ?</p>";
//} else if ($myName === 'Harry') {
//    echo "<p>$myName you are looking divine this fine summers day arn't you.</p>";
//} else {
//    echo "<p>Get too fuck</p>";
//}
//
//
//$students = [
//    [
//        'name'=> 'George',
//        'favColor' => 'ForestGreen',
//        'favFood' => 'Squares'
//    ],
//    [
//        'name'=> 'Mike',
//        'favColor' => 'RacingGreen',
//        'favFood' => 'Pizza'
//    ],
//    [
//        'name'=> 'Josh',
//        'favColor' => '#D11736',
//        'favFood' => 'Tonkatsu'
//    ],
//    [
//        'name'=> 'Jo',
//        'favColor' => 'Purple',
//        'favFood' => '#C159D4'
//    ],
//    [
//        'name'=> 'Nico',
//        'favColor' => 'NavyBlue',
//        'favFood' => 'Cheese'
//    ],
//    [
//        'name'=> 'Tom',
//        'favColor' => '#C159D4',
//        'favFood' => 'Halloumi'
//    ]
//];
//
//foreach ($students as $key => $value) {
//    foreach ($value as $key => $value) {
//        if ($key === 'favColor' || $key === 'favFood') {
//            echo "<p>" . $key . ": " . $value . "</p>";
//        } else {
//            echo "<h1>" . $key . ": " . $value . "</h1>";
//        }
//    }
//}
//
//foreach ($students as $key => $value) {
//    foreach ($value as $studentKey => $studentLike) {
//        if ($studentKey === 'favColor' || $studentKey === 'favFood') {
//            echo "<p>" . $studentKey . ": " . $studentLike . "</p>";
//        } else {
//            echo "<h1>" . $studentKey . ": " . $studentLike . "</h1>";
//        }
//    }
//}
//foreach($students as $student) {
//    echo '<div>';
//    echo '<h2>' . 'The students name is: ' . $student['name'] . '</h2>';
//    echo  '<p>' . 'The students favorite color is: ' . $student['favColor'] . '</p>' . '<p> ' . 'Students favorite food is: ' . $student['favFood'] . '' . '</p>';
//    echo '</div>';
//}
//
//$bread = 'sourdough bread';
//
//function makeExtraToastyToast($bread) {
//    return $charcoal = 'charcoaly ' . $bread;
//}
//
//echo "<p>" . makeExtraToastyToast($bread) . '</p>';
//
//$bread = "tiger bread";
//
//echo "<p>" . makeExtraToastyToast($bread) . '</p>';
//
//function makeToast (string $bread, int $levelOfToastiness) {
//    return 'toasty ' . $bread . 'done to a ' . $levelOfToastiness . 'nice and toasty indeed.';
//}
//
//echo makeToast('Wheaty Bread', 1);

//Functionialise all of the things.
//create a deck using functions and automation as thats cool.









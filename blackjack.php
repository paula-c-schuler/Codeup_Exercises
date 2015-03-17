<?php
// complete all "todo"s to build a blackjack game
// create an array for suits
$suits = ['C', 'H', 'S', 'D'];
// create an array for cards
$cards = ['A', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K'];
$name = '';
$dealerName = 'Dealer';
$playerName = 'Player';
// initialize a dealer and player hand
$dealer = [];
$player = []; 

// build a deck (array) of cards
// card values should be "VALUE SUIT". ex: "7 H"
// make sure to shuffle the deck before returning it
// THIS WORKS
function buildDeck($suits, $cards) {
    foreach ($cards as $value) {
        foreach ($suits as $suit) {
            $deckOfCards[] = $value . ' ' . $suit;
        }
    }
    shuffle($deckOfCards);
    $deck = $deckOfCards;
    return $deck;
}


// determine if a card is an ace
// return true for ace, false for anything else
// function cardIsAce($card) {
//   	if ($card == 'A C') {
//   	return true;
//   	} if ($card == 'A H') {
//   	return true; 
//   	} elseif ($card == 'A S') {
//   	return true;
//   	} elseif ($card == 'A D') {
//   	return true; 
// 	} else return false;
// 	}


// determine the value of an individual card (string)
// aces are worth 11
// face cards are worth 10
// numeric cards are worth their value
// THIS WORKS
function getCardValue($card) {
	$cardValue = ' ';
    $cardArray = explode(' ', $card);
    print_r($cardArray);
    var_dump($cardArray);
    $card = array_shift($cardArray);
    echo "This is the new naked card." . $card . PHP_EOL; 
    if (($card[0]) == 'A') {
        var_dump($card[0]);
        $cardValue = 11;
        echo "This is the new cardValue " . $cardValue . PHP_EOL;
    } else if ($card[0] == 'K' || $card[0] == 'Q' || $card[0] == 'J') {
        var_dump($card[0]);
        $cardValue = 10;
    } else if ($card[0] == '9') {
        var_dump($card[0]);
        $cardValue = 9;
    } else if ($card[0] == '8') {
        var_dump($card[0]);
        $cardValue = 8;
    } else if ($card[0] == '7') {
        var_dump($card[0]);
        $cardValue = 7;
    } else if ($card[0] == '6') {
        var_dump($card[0]);
        $cardValue = 6;
    } else if ($card[0] == '5') {
        var_dump($card[0]);
        $cardValue = 5;
    } else if ($card[0] == '4') {
        var_dump($card[0]);
        $cardValue = 4;
    } else if ($card[0] == '3') {
        var_dump($card[0]);
        $cardValue = 3;
    } else if ($card[0] == '2') {
        var_dump($card[0]);
        $cardValue = 2;
    }
        var_dump($cardValue);
        return $cardValue;
    }

//TEST: 
// $card = '2 H';
// getCardValue($card);

    

// get total value for a hand of cards
// don't forget to factor in aces
// aces can be 1 or 11 (make them 1 if total value is over 21)
function getHandTotal($hand) {
    $total = 0;
    var_dump($hand);
    foreach ($hand as $card) {
        if ($card == 11 && $hand >= 11) {
            $card += 1;
        } else $total += getCardValue($card);
    } 
    return $total; 
} 




// draw a card from the deck into a hand
// pass by reference (both hand and deck passed in are modified)
//NTS: HAND HAS MORE, DECK HAS LESS

// function drawCard (&$hand, &$deck) {
//     $hand = array_shift($deck);
//     return ($hand);
// }



// print out a hand of cards
// print_r($hand);




// hidden is to initially show only first card of hand (for dealer)
// output should look like this:
// Dealer: [4 C] [???] Total: ???
// or:
// Player: [J D] [2 D] Total: 12

function echoHand($hand, $name) {
    var_dump($hand);
    $total = getHandTotal($hand);
    var_dump($total . " is total of echoHand") . PHP_EOL;
    $faceValues = ' ';
    // foreach ($hand as $card) {
    //     var_dump($card . " is the card");
    //     $faceValues .= "[" . " " . $card[0] . " " . "of" . " " . $card[1] . " " . "]";

    //     $message = "$name:" . $faceValues . "Total: $total" . PHP_EOL; 
    // }
}



// build the deck of cards
// dealer and player each draw two cards
// echo the dealer hand, only showing the first card
// todo
// echo the player hand
// todo
// allow player to "(H)it or (S)tay?" till they bust (exceed 21) or stay
// while (/* todo */) { 
  // todo
// }

// show the dealer's hand (all cards)
// todo
// todo (all comments below)
// at this point, if the player has more than 21, tell them they busted
// otherwise, if they have 21, tell them they won (regardless of dealer hand)
// if neither of the above are true, then the dealer needs to draw more cards
// dealer draws until their hand has a value of at least 17
// show the dealer hand each time they draw a card
// finally, we can check and see who won
// by this point, if dealer has busted, then player automatically wins
// if player and dealer tie, it is a "push"
// if dealer has more than player, dealer wins, otherwise, player wins
//NOTE TO SELF: IF HAVE TIME TO SPICE UP DISPLAY AND SHOW ICONS, USE THE $DECK VARIABLE
// AND NOT THE $CARD VARIABLE ????


$deck = buildDeck($suits, $cards);

$dealer[] = array_shift($deck);
// $player[] = array_shift($deck);
$dealer[] = array_shift($deck);
// $player[] = array_shift($deck);
var_dump($dealer);
var_dump("the dealer dumped just above this");
// var_dump($player);
// var_dump("the player dumped just above this");


// $cardValue = getCardValue($card);
// echoHand($dealer, $dealerName);
// echoHand($player, $playerName);



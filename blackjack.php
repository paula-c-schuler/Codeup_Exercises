<?php
// complete all "todo"s to build a blackjack game
// create an array for suits
$suits = ['C', 'H', 'S', 'D'];
// create an array for cards
$cards = ['A', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K'];
$name = '';
$dealerName = 'Dealer';
// initialize a dealer and player hand
$dealer = [];
$player = [];

//engage with visitor
fwrite(STDOUT, "Do you want to play Blackjack? (Y)es or (N)o ");
$play = fgets(STDIN);
if ($play == 'Y') {
  getName();
} 

// name is the name of the player
function getName () {
    fwrite(STDOUT, "Player name is: ");
    $name = fgets(STDIN);
    return $name;
}

// build a deck (array) of cards
// card values should be "VALUE SUIT". ex: "7 H"
// make sure to shuffle the deck before returning it
function buildDeck($suits, $cards) {
    foreach ($cards as $value) {
        foreach ($suits as $suit) {
            $deckOfCards[] = $value . ', ' . $suit;
        }
    }
    $deckOfCards = shuffle($deckOfCards);
    $deck = $deckOfCards;
    return $deck;
}

// determine if a card is an ace
// return true for ace, false for anything else
function cardIsAce($card) {
  	if ($card == 'A C') {
  	return true;
  	} if ($card == 'A H') {
  	return true; 
  	} elseif ($card == 'A S') {
  	return true;
  	} elseif ($card == 'A D') {
  	return true; 
	} else return false;
	}


function getCard($deck) {
	foreach ($deck as $singleCard) {
		$singleCard = array_shift($deck);
	}
	return $singleCard;
}


// determine the value of an individual card (string)
// aces are worth 11
// face cards are worth 10
// numeric cards are worth their value
function getCardValue($card) {
	$cardArray = explode(', ', $card);
    $cardValue = $cardArray[0];
    if ($cardValue == 'J' || 'Q' || 'K') {
        $cardValue = 10;
    } elseif ($cardValue == 'A') {
        $cardValue = 11;
    } else $cardValue = intval($cardValue);
    return $cardValue;
}


// get total value for a hand of cards
// don't forget to factor in aces
// aces can be 1 or 11 (make them 1 if total value is over 21)
function getHandTotal($hand) {
    var_dump("in getHandTotal");
    foreach ($hand as $card) {
        $handTotal += getCardValue($card[0]);
        var_dump($handTotal);
  }
}


// draw a card from the deck into a hand
// pass by reference (both hand and deck passed in are modified)
//NTS: HAND HAS MORE, DECK HAS LESS
function drawCard (&$hand, &$deck) {
    $hand = array_shift($deck);
    return ($hand);
}

// print out a hand of cards
print_r($hand);


// hidden is to initially show only first card of hand (for dealer)
// output should look like this:
// Dealer: [4 C] [???] Total: ???
// or:
// Player: [J D] [2 D] Total: 12

function echoHand($hand, $name) {
    foreach ($hand as $card) {
        echo {$name} . ": " . {$card} . " " . {$card} . " Total: {$handTotal}";
    }
}



// function getTwoCards ($deck) {
//     for ($i = 0; $i < 3; $i++) {
//         $dealer += array_shift($deck);
//     } for ($i = 0; $i < 3; $i++) {
//         $player = array_shift($deck);
//     } 
//     return $player $dealer $deck;
//     var_dump($player $dealer $deck);
// }

// obtain a player name, start the game
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


$name = getName();
$deck = buildDeck($suits, $cards);
$card = getCard($deck);
$cardValue = getCardValue($card);
echoHand($dealer, $dealerName);
echoHand($player, $name);

$handTotal = getHandTotal($hand);
getHandTotal($hand);


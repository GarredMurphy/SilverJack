<html><body>
    
    <head>
            <title></title>
    </head>
<?php
    require_once('deck.php');

    $deck = new Deck();
    for (;$deck->getSize() > 0;)
    {
        $newCard = $deck->drawCard();
        echo "<img src='". $newCard->getImg() ."' />";
    }
    
    
    // These 2 lines are used to create the array of datatype Player which has the players hand and points
    // For example: player 1 is at index[0], player 2 is at index[1], etc...
    // include 'makePlayerDecks.php';
    // $players = getPlayers();

?>



</body>
</html>
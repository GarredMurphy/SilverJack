<html><body>
    
    <head>
            <title></title>
    </head>
<?php
    // require_once('deck.php');

    // $deck = new Deck();
    // for (;$deck->getSize() > 0;)
    // {
    //     $newCard = $deck->drawCard();
    //     echo "<img src='". $newCard->getImg() ."' />";
    // }
    
    
    include 'findWinner.php';
    include 'makePlayerDecks.php';
    
    // Displays each player name with their correspondings cards and points
    // Modified findWiner.php to account for multiple winners
    $players = getPlayers();
    for($i = 0; $i < 4; $i++) {
        echo ($players[$i]->getName());
        echo ': ';
        for($k = 0; $k < count($players[$i]->getHand()); $k++) {
            echo "<img src='". $players[$i]->getHand()[$k]->getImg() ."' />";
        }
        echo ($players[$i]->getPoints());
        echo '<br>';
    }
    echo '<br>';
    
    getWinner($players);

?>



</body>
</html>
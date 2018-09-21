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

?>



</body>
</html>
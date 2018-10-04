<?php
    class Player{
        private $hand;
        private $points;
        
        function __construct() {
            $this->hand = array();
            $this->points = 0;
        }
        
        // get points function
        public function getPoints()
        {
            return $this->points;
        }
        // set points function
        public function setPoints($num)
        {
            $this->points += $num;
        }
        
        // get card array function
        public function getHand()
        {
            return $this->hand;
        }
        // set card array function
        public function setHand($card)
        {
            array_push($this->hand, $card);
        }
    } 

?>

<?php

    // returns an array of type Player
    // each index is a Player which has the hand and points for the players
    function getPlayers() {
        require_once('deck.php');
    
        $deck = new Deck();
        $allPlayers = array();
        
        for($i = 0; $i < 4; $i++) {
            $player = new Player();
            
            while($player->getPoints() < 35) {
                $newCard = $deck->drawCard();
                $player->setHand($newCard);
                $player->setPoints($newCard->getPoints());
            }
            array_push($allPlayers, $player);
        }
        return $allPlayers;
    }
    
?>
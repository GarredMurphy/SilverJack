<?php
    
    function getWinner(){
        require_once('makePlayerDecks.php');
        
        //Going to add the winner to this string
        $texts = "";
        #the names can be changed to whatever you want, just went with the OG spongebob
        $playerNames = array("Spongebob", "Patrick", "Old man Jenkins", "Where's my diet Dr. Kelp dude");
        $max = 0;
        $playerIndex = 0;
        $totalSum = 0;
        
        //getPlayers() returns an array. Each index is a player and holds the players hand as well as points
        $players = getPlayers();
        
        //going through a for loop and iterating through all 4 players indexs and checking their score
        //whoever is less than or equal to 42 and greater than max is the winner.
        for($ii = 0; $ii < 4; $ii++){
            if($players[$ii]->getPoints() <= 42 && $players[$ii]->getPoints() > $max){
                $max = $players[$ii]->getPoints();
                $totalSum += $players[$ii]->getPoints();
                $playerIndex = $ii;
            }
        }
        
        //returns winners name and total
        if($max != 0){
            $texts .= $playerNames[$playerIndex] . " won! The sum of the over all score is $totalSum";
        }
        else{
            $texts .= "No one won.";
        }
        
        return $texts;
    }
?>
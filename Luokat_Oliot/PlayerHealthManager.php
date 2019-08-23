<?php
/*Eräässä pelissä on PlayerHealthManager niminen luokka, jossa on seuraavat yksityiset ominaisuudet

* currentHP // pelihahmon nykyinen terveys

* maxHP // pelihahmon maksimiterveys

Lisää luokkaan seuraavat metodit. Tässä harjoituksessa ei tarvitse lisä get- ja set-metodeja.

* addPlayerHealth($healthAmmount)

* setMaxHealth

* hurtPlayer($damageToGive) */

class PlayerHealthManager{
    private $currentHP;
    private $maxHP;

    public function __construct(){
        
    }
    public function setCurrentHP($HP){
        $this->currentHP = $HP;
    }

    public function setMaxHealth($health){
        $this->maxHP = $health;
    }
    public function getCurrentHP(){
        return $this->currentHP;
    }
    public function addPlayerHealth($healthAmmount){
        if($this->currentHP + $healthAmmount < $this->maxHP){
            $this->currentHP = $this->currentHP + $healthAmmount;
        } else {
            $this->currentHP = $this->maxHP;
        }
        
        return "Pelaajan terveyden määrä on nyt " . $this->getCurrentHP() . " yksikkoa. <br>";
    }
    
    public function hurtPlayer($damageToGive){
        if($this->currentHP - $damageToGive > 0){
             $this->currentHP = $this->currentHP - $damageToGive;
        } 
         
        return "Pelaajan terveyden määrä satuttamisen jälkeen on " . $this->getCurrentHP() . " yksikkoa.<br>";

    }
}
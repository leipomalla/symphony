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

    public function __construct($HP){
        $this->currentHP = $HP;
    }
    public function addPlayerHealth($healthAmmount){
        $this->currentHP = $this->currentHP + $healthAmmount;
        return "Pelaajan terveyden määrä on nyt " . $this->currentHP . " yksikkoa.";
    }
    public function setMaxHealth(){
        $this->maxHP = 500;
        if($this->maxHP > 500){
            $this->maxHP = 500;
        }
    }
}
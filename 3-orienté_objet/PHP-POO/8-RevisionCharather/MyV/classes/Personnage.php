<?php

declare(strict_types=1);


class Personnage
{

    public string $nom;

    public int $vie = 100;

    public int $maxvie = 200;

    public int $attaque = 20;

    public function __construct(string $nom){
        //sert à construire un objet avec des valeurs donnnées
        $this->nom = $nom;
    }

    public function heal (int $montant){
        $this->vie = $this->vie + $montant;
        if ($this -> vie > $this -> maxvie){
            $this -> vie = $this -> maxvie;
        }
    }

    public function regenerer(int $life = 100): void
    {
        $this->vie = $this->vie + $life;
    }

    public function afficher() : void
    {
        echo $this->nom." a ". $this->vie. " points de vie et "
        . $this->attaque
        . " en attaque";
    }
}
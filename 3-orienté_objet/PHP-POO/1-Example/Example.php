<?php

declare(strict_types=1);

class Example
{
    // propriétés (en gros des variables)
    public $identifiant;
    public $nom;
    public $prenom;
    public $dateDeNaissance;
    public $lieuDeNaissance;

    // constructeur : il permet de construire des objets de la classe
    public function __construct(string $identifiant, string $name, string $prenom, string $dateNaiss, string $lieuNaiss){

        $this->identifiant = $identifiant;
        $this->nom= $name;
        $this->prenom= $prenom;
        $this->dateDeNaissance= $dateNaiss;
        $this->lieuDeNaissance= $lieuNaiss;
    }

    //méthodes (en gros des functions)
    public function Scolarite (){}
}

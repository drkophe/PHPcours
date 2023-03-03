<?php

declare(strict_types=1);

class Utilisateurs
{
    public string $prenom;
    public int $age;

    public function afficherUser (){
        return $this -> prenom;
    }

    public $tabUser = [
        0 => [
            'prenom' => 'Lorenzo',
            'age' => 23
        ],
        1 => [
            'prenom' => 'Martin',
            'age' => 25
        ],
        2 => [
            'prenom' => 'Guillaume',
            'age' => 33
        ],
        3 => [
            'prenom' => 'Mayron',
            'age' => 26
        ],
        4 => [
            'prenom' => 'Yann',
            'age' => 22
        ],
        5 => [
            'prenom' => 'Olivier',
            'age' => 45
        ],
        6 => [
            'prenom' => 'Laurent',
            'age' => 51
        ]
    ];

}



// $user1 = new Utilisateurs('Lorenzo',23);
// $user2 = new Utilisateurs('Martin',25);
// $user3 = new Utilisateurs('Guillaume',33);
// $user4 = new Utilisateurs('Mayron',26);
// $user5 = new Utilisateurs('Yann',22);
// $user6 = new Utilisateurs('Olivier',45);
// $user7 = new Utilisateurs('Laurent',51);

// $userTab = [$user1, $user2, $user3, $user4, $user5, $user6, $user7];

// $userTab2 = [
//     new Utilisateurs('Lorenzo',23),
//     new Utilisateurs('Martin',25),
//     new Utilisateurs('Guillaume',33),
//     new Utilisateurs('Mayron',26),
//     new Utilisateurs('Yann',22),
//     new Utilisateurs('Olivier',45),
//     new Utilisateurs('Laurent',51)
// ];

// echo $user1 -> prenom;
// echo $user3 -> afficherUser();

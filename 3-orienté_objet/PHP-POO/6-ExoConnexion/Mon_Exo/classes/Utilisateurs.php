<?php

declare(strict_types=1);

class Utilisateurs
{
    private $utilisateurs = [
        0 => [
            'prenom' => 'Lorenzo',
            'nom' => 'Bosi',
            'age' => 23,
            'login' => 'lorenzo',
            'mdp' => '1234',
            'photoDeProfil' => 'https://media.istockphoto.com/id/1194177819/fr/vectoriel/illustration-plate-de-vecteur-dun-jeune-caract%C3%A8re-masculin-gardant-sa-main-dans-la-poche.jpg?s=612x612&w=0&k=20&c=y3rZLKVN3Gy9HOpcQTVeZ10lwvBeFSHEKB597QnXm_s=',
            'biographie' => 'Faut écrire quoi la ?'
        ],
        1 => [
            'prenom' => 'Martin',
            'nom' => 'Perner',
            'age' => 27,
            'login' => 'martin',
            'mdp' => '1234',
            'photoDeProfil' => 'https://media.istockphoto.com/id/1185766385/fr/vectoriel/jeune-caract%C3%A8re-masculin-retenant-un-noeud-des-%C3%A9couteurs-emm%C3%AAl%C3%A9s-mode-de-vie-mill%C3%A9naire.jpg?s=612x612&w=0&k=20&c=hgfKiiOo-wdhQJAChTns2XHmH4yIW9XpipyPUL9K3Hs=',
            'biographie' => 'Yo moi c Martin'
        ],
    ];

    public function connexion ($login, $mdp){

        foreach($this -> utilisateurs as $user){

            if($user['login'] == $login && $user['mdp'] == $mdp){

                // on crée un cookie qui stocke le login pendant 1h (prendre une info unique comme le login ou l'email par exemple)
                setcookie('login', $user['login'], time() + 3600);

                //profil
                echo "<div id='profil'>
                        <div id='top'>
                            <img src='".$user['photoDeProfil']."' alt='photo de profile' id ='image'>
                            <span>
                                <h3>".$user['prenom']." ".$user['nom']."</h3>
                                <p id ='age'>".$user['age']." ans</p>
                            </span>
                        </div>
                        <p id ='bio'>".$user['biographie']."</p>
                    </div>";
            }

        }
        
    }
    
}

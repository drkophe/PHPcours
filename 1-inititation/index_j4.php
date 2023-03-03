<?php

// $utilisateur = [
//     ["kophe","kophe@gmail.com",20],
//     ["john","john@gmail.com",25],
//     ["jane","jane@gmail.com",30],
//     ["bob","bob@gmail.com",28]
// ];

// foreach ($utilisateur as $info){
//     echo $info[0]."<br>";
// }
// echo "<br><br>";

// $user =[
//     ['identifiant'=> "idf1", 'mail' => "idf1@gmail.com", "age" => 23],
//     ['identifiant'=> "idf3", 'mail' => "idf3@gmail.com", "age" => 25],
//     ['identifiant'=> "idf4", 'mail' => "idf4@gmail.com", "age" => 26],
//     ['identifiant'=> "idf2", 'mail' => "idf2@gmail.com", "age" => 24]
// ];

// foreach ($user as $info => $nom){
//     echo ($nom['identifiant'])."<br>";
// }
// echo "<br><br>";

// $fruits = array ("apple","orange",array("pear","mango"), "banana");
// echo (count($fruits,1));

// echo "\$x";

// function f($x = 4){
//     $x = $x / 2;
//     return $x;
// }
// $x = 10;
// f($x);
// echo $x;

// function a(){
//     function b(){
//         echo 'I am b';
//     }
//     echo 'I am a';
// }
// a();
// b();

$tab = array("a" => "one", "b" => "two");
$result = array_flip($tab);
print_r($result);
?>
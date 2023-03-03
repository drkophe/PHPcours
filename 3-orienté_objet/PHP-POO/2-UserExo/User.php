<?php

declare(strict_types=1);

class User
{
    public $username;
    public $email;
    public $password;
    public $avatarURL;

    public function __construct(string $username, string $email, string $password, string $avatarURL){

        $this->username = $username;
        $this->email= $email;
        $this->password= $password;
        $this->avatarURL= $avatarURL;
    }

}

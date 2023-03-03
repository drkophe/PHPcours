<?php

declare(strict_types=1);

class Charaters
{
    public string $name;
    public int $life = 100;
    public int $maxLife = 100;
    public int $attack = 40;

    public function __construct(string $name){

        $this->name = $name;
    }

    public function magicMethod ($name, $life, $attack){
        return 10;
    }

}

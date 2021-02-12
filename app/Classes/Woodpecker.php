<?php

namespace App\Classes;
use App\AbstractClass\Animal;
use App\Traits\FlyTrait;

/**
 *
 */
class woodpecker extends Animal
{
    use FlyTrait;

    public function speak() {
        echo "knock knock\n";
    }
}

<?php

namespace App\Classes;
use App\AbstractClass\Animal;
use App\Traits\GetPositionTrait;
use App\Contracts\Animal\FlyInterface;

/**
 *
 */
class woodpecker extends Animal implements FlyInterface
{
    use GetPositionTrait;

    public function speak() {
        echo "knock knock\n";
    }

    public function fly() {
        echo "Fly for life\n";
    }
}

<?php

namespace App\Classes;
use App\AbstractClass\Animal;
use App\Services\Shopify\Product\GetProduct;
use App\Contracts\Animal\FlyInterface;

/**
 *
 */
class woodpecker extends Animal implements FlyInterface
{
    public function speak() {
        echo "knock knock\n";
    }

    public function fly() {
        echo "fly normal\n";
    }
}

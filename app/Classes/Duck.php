<?php

namespace App\Classes;
use App\AbstractClass\Animal;
use App\Services\Shopify\Product\GetProduct;
use App\Contracts\Animal\FlyInterface;

/**
 *
 */
class Duck extends Animal implements FlyInterface
{
    protected $_name;

    public function __construct($name)
    {
        $this->_name = $name;
    }

    public function speak() {
        echo "I'm ".$this->_name." quack quack\n";
    }

    public function fly() {
        echo "fly normal\n";
    }
}

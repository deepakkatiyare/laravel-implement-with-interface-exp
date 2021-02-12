<?php

namespace App\Classes;
use App\AbstractClass\Animal;
use App\Traits\FlyTrait;

/**
 *
 */
class Duck extends Animal
{
    use FlyTrait;
    protected $_name;

    public function __construct($name)
    {
        $this->_name = $name;
    }

    public function speak() {
        echo "I'm ".$this->_name." quack quack\n";
    }
}

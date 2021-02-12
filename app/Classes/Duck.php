<?php

namespace App\Classes;
use App\AbstractClass\Animal;
use App\Traits\GetPositionTrait;
use App\Contracts\Animal\FlyInterface;
/**
 *
 */
class Duck extends Animal implements FlyInterface
{
    use GetPositionTrait;
    protected $_name;

    public function __construct($name)
    {
        $this->_name = $name;
    }

    public function speak() {
        echo "I'm ".$this->_name." quack quack\n";
    }

    public function fly() {
        echo "Fly for fun only\n";
    }
}

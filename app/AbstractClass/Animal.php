<?php

namespace App\AbstractClass;

/**
 *
 */
abstract class Animal
{
    public function sleep() {
        echo "sleep\n";
    }

    abstract function speak();
}

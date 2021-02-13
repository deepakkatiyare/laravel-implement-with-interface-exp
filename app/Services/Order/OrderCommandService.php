<?php

namespace App\Services\Order;
use App\Contracts\Order\OrderCommandServiceInterface;

/**
 *
 */
class OrderCommandService implements OrderCommandServiceInterface
{
    public function create() {
        echo "you create order\n";
    }
}

?>

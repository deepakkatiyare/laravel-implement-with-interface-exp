<?php

namespace App\Services\Order;
use App\Contracts\Order\OrderQueryServiceInterface;

/**
 *
 */
class OrderQueryService implements OrderQueryServiceInterface
{
    public function list() {
        echo "you query for a list of orders\n";
    }
}

?>

<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\Order\OrderCommandService;
use App\Services\Order\OrderQueryService;

class TestCQRS extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:TestCQRS';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Test CQRS';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(OrderCommandService $orderCommandService, OrderQueryService $orderQueryService)
    {
        parent::__construct();
        $this->orderCommandService = $orderCommandService;
        $this->orderQueryService = $orderQueryService;
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->orderCommandService->create();
        $this->orderQueryService->list();
    }
}

<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\UserSecond;

class SeedUserSecond extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:SeedUserSecond';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Seed User Second';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $user = new UserSecond;
        $user->name = "Son Nguyen";
        $user->save();
    }
}

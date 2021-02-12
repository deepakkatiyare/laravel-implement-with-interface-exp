<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\View;

class SeedViewDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:SeedViewDatabase';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Seed View Database';

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
        for($i = 0; $i < 5000000; $i++) {
            echo $i."\n";
            $index = rand(0, 3039);
            $view = new View;
            $view->ip = "192.168.10.".$index;
            $view->save();
        }
    }
}

<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Classes\Dog;
use App\Classes\Duck;
use App\Classes\Woodpecker;

class TestAnimalCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:TestAnimalCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Test Animal Command';

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
        $dog = new Dog;
        $dog->speak();

        $duck = new Duck("Omega Lulu");
        $duck->speak();
        $duck->fly();

        $woodpecker = new Woodpecker;
        $woodpecker->speak();
        $woodpecker->fly();
    }
}

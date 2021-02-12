<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;

class TestViewSql extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:TestViewSql';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Test View Sql';

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
        echo date("h:i:sa")."\n";
        $result1 = DB::select('SELECT `ip`, COUNT(*) FROM `views` GROUP BY `ip`');
        print_r($result1);
        echo date("h:i:sa")."\n";

        $result2 = DB::select('SELECT * FROM views_overall_report');
        print_r($result2);
        echo date("h:i:sa")."\n";
    }
}

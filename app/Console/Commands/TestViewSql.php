<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;
use DateTime;

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

    private function showTime() {
        // $now = DateTime::createFromFormat('U.u', microtime(true));
        // echo $now->format("m-d-Y H:i:s.u")."\n";
        echo date("h:i:sa")."\n";
    }

    private function rawQuery() {
        echo "#rawQuery\n";
        $this->showTime();
        $result1 = DB::select("SELECT ip, COUNT(*) FROM views WHERE created_at >= '2021-02-12' AND updated_at >= '2021-02-12' GROUP BY ip ORDER BY COUNT");
        $this->showTime();
    }

    private function testViewSql() {
        echo "\n#testViewSql\n";
        $this->showTime();
        $result2 = DB::select('SELECT * FROM views_overall_report');
        $this->showTime();
    }

    private function testMaterializedViewSql() {
        echo "\n#testMaterializedViewSql\n";
        $this->showTime();
        $result = DB::select('SELECT * FROM views_overall_report_24h');
        $this->showTime();
    }

    public function handle() {
        $this->rawQuery();
        $this->testViewSql();
        $this->testMaterializedViewSql();
    }
}

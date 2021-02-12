<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;

class UpdateMaterializedView extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:UpdateMaterializedView';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update Materialized View';

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
        DB::statement("REFRESH MATERIALIZED VIEW views_overall_report_24h");
    }
}

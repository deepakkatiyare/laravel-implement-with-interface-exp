<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatOverallReportView extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        DB::statement("
        CREATE VIEW views_overall_report AS
        (
            SELECT `ip`, COUNT(*) FROM `views` GROUP BY `ip`
        )
        ");
    }

    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        DB::statement('DROP VIEW IF EXISTS views_overall_report');

    }
}

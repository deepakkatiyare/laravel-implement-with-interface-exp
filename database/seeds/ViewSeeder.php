<?php

use Illuminate\Database\Seeder;
use App\View;

class ViewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ips = ["192.168.10.1", "192.168.10.2", "192.168.10.3", "192.168.10.4"];
        for($i = 0; $i < 500000; $i++) {
            echo $i."\n";
            $index = rand(0, 3);
            $view = new View;
            $view->ip = $ips[$index];
            $view->save();
        }
    }
}

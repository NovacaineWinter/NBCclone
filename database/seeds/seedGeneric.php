<?php

use Illuminate\Database\Seeder;

class seedGeneric extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\generic::create(['type'=>"infobites"]);
    }
}

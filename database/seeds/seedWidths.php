<?php

use Illuminate\Database\Seeder;

class seedWidths extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		\App\width::create(['feet'=>"6'10''",'meters'=>2.08]);
		\App\width::create(['feet'=>"12'",'meters'=>3.66]);
    }
}

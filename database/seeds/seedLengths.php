<?php

use Illuminate\Database\Seeder;

class seedLengths extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\App\length::create(['feet'=>"50'",'meters'=>15.24]);
    	\App\length::create(['feet'=>"57'",'meters'=>17.37]);
    	\App\length::create(['feet'=>"60'",'meters'=>18.29]);
		\App\length::create(['feet'=>"65'",'meters'=>19.81]);
		\App\length::create(['feet'=>"70'",'meters'=>21.33]);
    }
}

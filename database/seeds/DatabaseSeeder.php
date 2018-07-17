<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(testAdminUser::class);
        
        $this->call(seedGeneric::class);
        $this->call(seedHullStyles::class);
        $this->call(seedLengths::class);
        $this->call(seedModels::class);        
        $this->call(seedTrimLevels::class);
        $this->call(seedWidths::class);
        
        $this->call(seedConfigurations::class);
        $this->call(seedStockBoats::class);
        $this->call(seedInfobites::class);
    }
}

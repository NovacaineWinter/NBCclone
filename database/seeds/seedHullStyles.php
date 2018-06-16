<?php

use Illuminate\Database\Seeder;

class seedHullStyles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\hull_style::create(
        	['name'=>'Narrowboat'],
        	['short_description'=>'Traditional narrowboat, ideal for cruising all the waterways'],
        	['comparison'=>'Pick a narrowboat if you want to cruise all the waterways all the time, best for the retired'],
        	['long_description'=>'Our narrowboats are build with a josher bow and a cruiser stern, for more information see the spec sheet']
        );

        \App\hull_style::create(
        	['name'=>'Widebeam'],
        	['short_description'=>'Amazing living space aboard a widebeam, ideal for families on a budget'],
        	['comparison'=>'Pick a widebeam if you want have full time work and want to cruise at weekends, ideal liveaboard'],
        	['long_description'=>'Our widebeams are build to be incredibly comfortable and easy to live on, for information view spec sheet']
        );

        \App\hull_style::create(
        	['name'=>'Barge'],
        	['short_description'=>'Beautiful craft, the boaters boat'],
        	['comparison'=>'The cream of the crop, barges are incredibly charming'],
        	['long_description'=>'Our barges are build with wide side decks a short bow, for more information see the spec sheet']
        );
    }
}

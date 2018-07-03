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
        $a = \App\hull_style::create(
        	['name'=>'Narrowboat',
        	'short_description'=>'Traditional narrowboat, ideal for cruising all the waterways',
        	'comparison'=>'Pick a narrowboat if you want to cruise all the waterways all the time, best for the retired',
        	'long_description'=>'Our narrowboats are build with a josher bow and a cruiser stern, for more information see the spec sheet']
        );
        $a->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true]);
        $a->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true]);
        $a->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true]);
        $a->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true]);
        $a->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true]);
        $a->primary_image_id = $a->images()->first()->id;
        $a->save();


        $b = \App\hull_style::create(
        	['name'=>'Widebeam',
        	'short_description'=>'Amazing living space aboard a widebeam, ideal for families on a budget',
        	'comparison'=>'Pick a widebeam if you want have full time work and want to cruise at weekends, ideal liveaboard',
        	'long_description'=>'Our widebeams are build to be incredibly comfortable and easy to live on, for information view spec sheet']
        );
        $b->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true]);
        $b->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true]);        
        $b->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true]);
        $b->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true]);
        $b->primary_image_id = $b->images()->first()->id;
        $b->save();


        $c = \App\hull_style::create(
        	['name'=>'Barge',
        	'short_description'=>'Beautiful craft, the boaters boat',
        	'comparison'=>'The cream of the crop, barges are incredibly charming',
        	'long_description'=>'Our barges are build with wide side decks a short bow, for more information see the spec sheet']
        );
        $c->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true]);
        $c->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true]);
        $c->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true]);
        $c->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true]);
        $c->primary_image_id = $c->images()->first()->id;
        $c->save();
    }
}

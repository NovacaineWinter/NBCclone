<?php

use Illuminate\Database\Seeder;

class seedModels extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /*  Narrowboats  */


        $a = \App\boat_model::create(
        	['hull_style_id'=>1,
        	'name'=>'Dynasty',
        	'short_description'=>'Modern rethink of a narrowboat, ideal for liveaboard life cruising the waterways',
        	'comparison'=>'Pick this narrowboat if you want to maximise your interior space, the master cabin is equiped with a kingsize bed',
        	'long_description'=>'The Dynasty is our top of the range narrowboat, luxurious living with thought out spaces.']
        );
        $a->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true]);
        $a->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true]);
        $a->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true]);
        $a->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true]);
        $a->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true]);
        $a->primary_image_id = $a->images()->first()->id;
        $a->save();



        $b = \App\boat_model::create(
        	['hull_style_id'=>1,
        	'name'=>'Cygnet',
        	'short_description'=>'Incredible value for a narrowboat, perfect for your first time out on the water',
        	'comparison'=>'While still maximising your interior space, this boat affords incredible equipment for the pricetag',
        	'long_description'=>'The Dynasty is our top of the range narrowboat, luxurious living with thought out spaces.']
        );
        $b->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true]);
        $b->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true]);
        $b->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true]);
        $b->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true]);
        $b->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true]);
        $b->primary_image_id = $b->images()->first()->id;
        $b->save();


        $c = \App\boat_model::create(
        	['hull_style_id'=>1,
        	'name'=>'Swan',
        	'short_description'=>'Typical cruiser style narrowboat, equiped with a wonderful well deck',
        	'comparison'=>'Pick this narrowboat if you want to enjoy life outside, enjoy your morning coffee on outside in the welldeck',
        	'long_description'=>'The Swan is our take on the typical narrowboat, luxurious living with thought out spaces.']
        );
        $c->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true]);
        $c->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true]);
        $c->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true]);
        $c->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true]);
        $c->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true]);
        $c->primary_image_id = $c->images()->first()->id;
        $c->save();




        $d = \App\boat_model::create(
        	['hull_style_id'=>3,
        	'name'=>'Jupiter',
        	'short_description'=>'Incredible presence on the waterways, luxury at its finest.',
        	'comparison'=>'The Jupiter is a squared stern, flat bottomed barge. Do not be fooled, this is one attractive boat',
        	'long_description'=>"The Jupiter is nottingham boat co's flagship barge, this boat represents an incredible place to live."]
        );
        $d->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true]);
        $d->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true]);
        $d->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true]);
        $d->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true]);
        $d->primary_image_id = $d->images()->first()->id;
        $d->save();


        $e=\App\boat_model::create(
        	['hull_style_id'=>3,
        	'name'=>'Neptune',
        	'short_description'=>'Luxurious living without compromise',
        	'comparison'=>'Simmilar in configuration to the jupiter, albeit with a rounded stern.',
        	'long_description'=>'The Neptune is a though out liveaboard barge, perfect for enjoying life at a relaxed pace.']
        ); 
        $e->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true]);
        $e->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true]);
        $e->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true]);
        $e->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true]);
        $e->primary_image_id = $e->images()->first()->id;
        $e->save();



        $f=\App\boat_model::create(
        	['hull_style_id'=>3,
        	'name'=>'Atlas',
        	'short_description'=>'Top of the range dutch style barge, equiped with chined hull, this is one sturdy boat',
        	'comparison'=>'This is your do-anything boat. Pick this barge to go cruising on the continent',
        	'long_description'=>'CAD designed from the very beginning, the attention to detail on this boat is breathtaking.']
        );
        $f->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true]);
        $f->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true]);
        $f->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true]);
        $f->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true]);
        $f->primary_image_id = $f->images()->first()->id;
        $f->save();



        /* Widebeams */
        $g=\App\boat_model::create(

        	['hull_style_id'=>2,
        	'name'=>'Galaxy',
        	'short_description'=>'Efficent places to live, the galaxy affords ample space along with many interior options',
        	'comparison'=>'Pick the Galaxy if you want a good floating home, widebeams give you the most space for your pound',
        	'long_description'=>'The galaxy widebeam gives you an amazing lifestyle out on the water, perfect for making the most of life.']
        ); 
        $g->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true]);
        $g->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true]);
        $g->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true]);
        $g->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true]);
        $g->primary_image_id = $g->images()->first()->id;
        $g->save();                   
             
    }
}

<?php

use Illuminate\Database\Seeder;

class seedTrimLevels extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $a = \App\trim_level::create(
        	['name'=>'Freedom',
        	'short_description'=>'Freedom to get out on the water, ideal for those on a budget',
        	'comparison'=>'The Freedom offers you the opportunity to get a fully fitted boat for the lowest cost, ideal first homes',
        	'long_description'=>'The freedom trim level offers a complete fully fitted boat equiped for liveaboard life at the lowest cost']
        );
        $a->fileConnection()->create(['src'=>'/img/freedom.png','is_image'=>true]);
        $a->primary_image_id = $a->images()->first()->id;
        $a->save();


        $b = \App\trim_level::create(
        	['name'=>'Lifestyle',
        	'short_description'=>'Expand your horisions',
        	'comparison'=>'The Lifestyle trim level gives you additional fitted furniture and equipment',
        	'long_description'=>'The Lifestyle trim level offers greater equipment and furniture, fitted furniture everywhere']
        );        
        $b->fileConnection()->create(['src'=>'/img/lifestyle.png','is_image'=>true]);
        $b->primary_image_id = $b->images()->first()->id;
        $b->save();


        $c = \App\trim_level::create(
        	['name'=>'Premier',
        	'short_description'=>'Exquisite luxury with all the creature comforts',
        	'comparison'=>'The premier offers nothing but the very best. Beautiful materials and amazing equipment',
        	'long_description'=>'Exceptional fitout, nothing left to chance.']
        );
        $c->fileConnection()->create(['src'=>'/img/premier.png','is_image'=>true]);
        $c->primary_image_id = $c->images()->first()->id;
        $c->save();

    }
}

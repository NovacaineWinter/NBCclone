<?php

use Illuminate\Database\Seeder;

class seedStockBoats extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            $a = \App\stock_boat::create(
            	['title'=>'Boat 399',
            	'description'=>'Description of boat 399',
            	'short_summary'=>'summary of 399',
            	'configuration_id'=> 3,
            	'price_ex_vat'=>55449]
            );
            $a->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true]);
            $a->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true]);
            $a->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true]);
            $a->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true]);
            $a->primary_image_id = $a->images()->first()->id;
            $a->save();


            $b = \App\stock_boat::create(
            	['title'=>'Boat 400',
            	'description'=>'Description of boat 400',
            	'short_summary'=>'summary of 400',
            	'configuration_id'=> 5,
            	'price_ex_vat'=>75449]
            );
            $b->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true]);
            $b->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true]);
            $b->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true]);
            $b->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true]);
            $b->primary_image_id = $b->images()->first()->id;
            $b->save();
 

            $c = \App\stock_boat::create(
            	['title'=>'Boat 401',
            	'description'=>'Description of boat 401',
            	'short_summary'=>'summary of 401',
            	'configuration_id'=> 10,
            	'price_ex_vat'=>57449]
            );
            $c->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true]);
            $c->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true]);
            $c->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true]);
            $c->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true]);
            $c->primary_image_id = $c->images()->first()->id;
            $c->save();


            $d = \App\stock_boat::create(
            	['title'=>'Boat 401',
            	'description'=>'Description of boat 401',
            	'short_summary'=>'summary of 401',
            	'configuration_id'=> 20,
            	'price_ex_vat'=>95449]
            );          
            $d->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true]);
            $d->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true]);
            $d->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true]);
            $d->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true]);
            $d->primary_image_id = $b->images()->first()->id;
            $d->save();                          
                          
    }
}

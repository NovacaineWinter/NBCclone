<?php

use Illuminate\Database\Seeder;

class seedInfobites extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hulls = \App\hull_style::all();
        $models = \App\boat_model::all();
        $trims = \App\trim_level::all();
        $stocks = \App\stock_boat::all();

        foreach($hulls as $hull){
        	$a=$hull->infobites()->create(['title'=>'Something Interesting...','description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum']);
        	$a->fileConnection()->create(['src'=>'/img/swan1.jpg','is_image'=>true,'is_in_carousel'=>false]);

            $b=$hull->infobites()->create(['title'=>'Something Else...','description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum']);
            $b->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true,'is_in_carousel'=>false]);

        }


        foreach($models as $model){
        	$c=$model->infobites()->create(['title'=>'Something Interesting...','description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum']);
            $c->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true,'is_in_carousel'=>false]);


        	$d=$model->infobites()->create(['title'=>'Something Else...','description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum']);
            $d->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true,'is_in_carousel'=>false]);

        }


        foreach($trims as $trim){
        	$e=$trim->infobites()->create(['title'=>'Something Interesting...','description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum']);
            $e->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true,'is_in_carousel'=>false]);

        	$f=$trim->infobites()->create(['title'=>'Something Else...','description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum']);
            $f->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true,'is_in_carousel'=>false]);

        }


        foreach($stocks as $stock){
        	$g=$stock->infobites()->create(['title'=>'Something Interesting...','description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum']);
            $g->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true,'is_in_carousel'=>false]);

        	$h=$stock->infobites()->create(['title'=>'Something Else...','description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum']);
            $h->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true,'is_in_carousel'=>false]);


        }
    }
}

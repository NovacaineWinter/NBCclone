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

       /* foreach($hulls as $hull){
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
*/

/*        ==========================================================================================================================
        ============================================================================================================================
        ==========================================================================================================================*/
 
        $generic = \App\generic::find(1);

        $ii=$generic->infobites()->create(['title'=>'Steel Selection','description'=>'All our hulls are made from S275 steel manufactured to EN10025. This is a high quality structural steel chosen for its weldability and its ductility. It is a low carbon steel with small alloying additions to get the strength required. It is an ideal material for building boats. Baseplates are 10mm, hull sides at 6mm and cabins at 5mm']);
        $ii->fileConnection()->create(['src'=>'/img/weld.jpg','is_image'=>true,'is_in_carousel'=>false]);

        $i=$generic->infobites()->create(['title'=>'Shot Blast Bare Metal Hull','description'=>'Every one of our hulls is put through a shot blasting process before paintwork preparation begins. This process vastly improves the adherance of the paint, translating into a better paint finish that lasts a lot longer. Makes you boat look even better for longer']);
        $i->fileConnection()->create(['src'=>'/img/blast.jpg','is_image'=>true,'is_in_carousel'=>false]);

        $j=$generic->infobites()->create(['title'=>'Paintwork preparation','description'=>'After shot blasting your hull passes into our dedicated paint shop. Here your hull will be faired, sanded and prepped by our expert team of technicians. No detail will be left unaddressed. A keen eye for detail here improves the finished product']);
        $j->fileConnection()->create(['src'=>'/img/prep.jpg','is_image'=>true,'is_in_carousel'=>false]);

        $k=$generic->infobites()->create(['title'=>'Exterior Finish','description'=>'After preparation, your hull is treated to an epoxy primer before a 2-pack high build primer is applied. After careful inspection, your hull is then coated with a 2-pack gloss finish. Your new boat will come with a 3 year guarantee for your peace of mind.']);
        $k->fileConnection()->create(['src'=>'/img/finish.jpg','is_image'=>true,'is_in_carousel'=>false]);        

        $l=$generic->infobites()->create(['title'=>'Equipment','description'=>'The equipment onboard carefully selected from the Vetus range. Here at Nottingham Boat Co we love vetus equipment. It is of exceptional quality with a global dedicated network of Vetus dealers on hand to support you if you ever run into trouble.']);
        $l->fileConnection()->create(['src'=>'/img/vetus.png','is_image'=>true,'is_in_carousel'=>false]);

        $m=$generic->infobites()->create(['title'=>'Engines','description'=>'Powered by a Vetus engine you can rely on. Quiet and smooth in operation, it will give you years of trouble free boating pleasure.']);
        $m->fileConnection()->create(['src'=>'/img/vh480.jpg','is_image'=>true,'is_in_carousel'=>false]);


        $m=$generic->infobites()->create(['title'=>'Internal Flooring','description'=>'Nothing but the best, your boat will feature karndean flooring throughout. It forms a waterproof flooring that is both flexible and hard-wearing. Ideal for life onboard a boat.']);
        $m->fileConnection()->create(['src'=>'/img/karndean.jpg','is_image'=>true,'is_in_carousel'=>false]);

    }
}

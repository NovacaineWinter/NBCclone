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

/*=============================================================================================================
===============================================================================================================
    Narrowboats  
===============================================================================================================
=============================================================================================================*/


        $a = \App\boat_model::create(
            ['hull_style_id'=>1,
            'name'=>'Dynasty',

            'short_description'=>'Modern rethink of a narrowboat, ideal for liveaboard life cruising the waterways',
            'comparison'=>'The Dynasty rethinks the traditional narrowboat with a view to making the best use of space for living aboard. In this design, the welldeck at the front is replaced by an extended cabin. This gains an extra 5ft of interior living space on the same sized boat. This also allows for a more luxurious master bedroom. The option of a full kingsize bed in the front of the boat is a luxury only afforded on a narrowboat of this design.<br>Pros:<ul class="ul-visible"><li>Extra interior space</li><li>Kingsize master bed</li><li>More flexibility with interior layout</li></ul><br>Cons:<ul class="ul-visible"><li>No Welldeck at the front</li><li>Not quite as traditional</li><li>Can only access the bow from outside</li></ul>',

            'long_description'=>'The Dynasty represents the ultimate in practicality. From it&#39;s go-anywhere dimensions to the practical use of space at the bow of the boat, this craft is for anyone looking for the perfect cruising boat. The extended cabin at the front of the boat offers 5&#39; of extra internal space compared to a boat with a welldeck.',
            'virtual_tour'=>'https://my.matterport.com/show/?m=ppsMWJeALaZ'
        ]
        );
        $a->fileConnection()->create(['src'=>'/img/dynasty2.jpg','is_image'=>true]);
        $a->fileConnection()->create(['src'=>'/img/dynasty1.jpg','is_image'=>true]);
        $a->fileConnection()->create(['src'=>'/img/dynasty3.jpg','is_image'=>true]);
        $a->fileConnection()->create(['src'=>'/img/cygnet1.jpg','is_image'=>true]);
        $a->fileConnection()->create(['src'=>'/img/cygnet2.jpg','is_image'=>true]);
        $a->fileConnection()->create(['src'=>'/img/cygnet3.jpg','is_image'=>true]);        
        $a->primary_image_id = $a->images()->first()->id;
        $a->save();



      /*  $b = \App\boat_model::create(
            ['hull_style_id'=>1,
            'name'=>'Cygnet',
            'short_description'=>'Incredible value for a narrowboat, perfect for your first time out on the water',
            'comparison'=>'While still maximising your interior space, this boat affords incredible equipment for the pricetag',
            'long_description'=>'The Dynasty is our top of the range narrowboat, luxurious living with thought out spaces.']
        );
        $b->fileConnection()->create(['src'=>'/img/cygnet1.jpg','is_image'=>true]);
        $b->fileConnection()->create(['src'=>'/img/cygnet2.jpg','is_image'=>true]);
        $b->fileConnection()->create(['src'=>'/img/cygnet3.jpg','is_image'=>true]);
        $b->primary_image_id = $b->images()->first()->id;
        $b->save();*/


        $c = \App\boat_model::create(
            ['hull_style_id'=>1,
            'name'=>'Swan',
            'short_description'=>'A cruiser style narrowboat, the Swan is the classic narrowboat.',
            'comparison'=>'A boat for those who value traditional lines. This is a cruiser stern narrowboat with a well deck at the front. Typical layouts afford a double bed at the front with views out of the double doors, extending out to the well deck and beyond.
                <br>Pros:
                <ul class="ul-visible">
                    <li>Outside living space - well deck</li>
                    <li>Access to the bow from inside</li>
                    <li>Ouside space accessable from the bedroom</li>
                </ul>
                <br>Cons:
                <ul class="ul-visible">
                    <li>Less interior space than the Dynasty foot-per-foot</li>
                    <li>No space for a kingsize bed</li>
                    <li>Space up front often leaves the person driving alone at the back while cruising</li>
                </ul>',

            'long_description'=>'This boat truly has the ability to go anywhere, enjoying all the waterways have to offer. A classic cruiser stern narrowboat, this model has a number of interior layout options available.']
        );
        $c->fileConnection()->create(['src'=>'/img/swan1.jpg','is_image'=>true]);
        $c->fileConnection()->create(['src'=>'/img/swan2.jpg','is_image'=>true]);
        $c->fileConnection()->create(['src'=>'/img/swan3.jpg','is_image'=>true]);
        $c->primary_image_id = $c->images()->first()->id;
        $c->save();



/*=============================================================================================================
===============================================================================================================
    Barges  
                

===============================================================================================================
=============================================================================================================*/


        $d = \App\boat_model::create(
            ['hull_style_id'=>3,
            'name'=>'Jupiter',
            
            'short_description'=>'Incredible presence on the waterways, the Jupiter is a striking boat with impressive useable spaces.',
            
            'comparison'=>'The Jupiter features a beautiful sweeping squared stern, providing access to wide side decks. Forward, this boat is of similar design to the Neptune. The bow has a finer entry than the Atlas, giving the Jupiter a distinctive look. 
                <br>Pros:
                <ul class="ul-visible">
                    <li>Massive entertaining space at the rear of the boat</li>
                    <li>Option for a very large wheelhouse</li>
                    <li>More interior volume owing to flat bottom</li>
                </ul>
                <br>Cons:
                <ul class="ul-visible">
                    <li>Less traditional</li>
                    <li>Very slightly harder to manoeuvre off the bank</li>
                    <li>Flat bottomed means category D waters only</li>
                </ul>

            ',

            'long_description'=>"The Jupiter represents an incredible place to live. With such striking looks, this boat won&#39;t fail to be noticed wherever she goes. The sweeping squared stern affords a very large entertaining space at the back of the boat. When the optional wheelhouse is chosen, this space is incredible for entertaining friends. The flat-bottomed hull allows for more interior space.",
            'virtual_tour'=>'https://my.matterport.com/show/?m=nPXW1hNR4Mp'
        ]
        );
        $d->fileConnection()->create(['src'=>'/img/stock1.jpg','is_image'=>true]);
        $d->fileConnection()->create(['src'=>'/img/jupiter.jpg','is_image'=>true]);
        $d->primary_image_id = $d->images()->first()->id;
        $d->save();


        $e=\App\boat_model::create(
            ['hull_style_id'=>3,
            'name'=>'Neptune',
            'short_description'=>'Modern redesign of the traditional flat-bottomed barge. Built with a beautiful round stern.',

            'comparison'=>'While sharing some characteristics with the Jupiter at the bow, the Neptune is a distinctive craft in it&#39;s own right. A beautiful rounded stern blends into the sweeping lines of the gunwales, making a wonderful space to entertain friends in an evening.
                <br>Pros:
                <ul class="ul-visible">
                    <li>Traditional flat-bottomed english style barge</li>
                    <li>More interior volume owing to flat bottom</li>
                    <li>Easy to manoeuvre with rounded stern</li>
                </ul>
                <br>Cons:
                <ul class="ul-visible">
                    <li>Less spacious rear deck than the Jupiter due to round stern</li>
                    <li>Flat bottomed means category D waters only</li>
                    <li>Rounded stern reduces number of choices for an optional wheelhouse</li>
                </ul>
            ',

            'long_description'=>'The Neptune is a thought out liveaboard barge, perfect for enjoying life at a relaxed pace. This is everything a barge should be. The sinuous curved forward cabin gives the master bedroom a distinctive charm, especially with the optional wooden panelling.']
        ); 
        $e->fileConnection()->create(['src'=>'/img/neptune1.jpg','is_image'=>true]);
        $e->fileConnection()->create(['src'=>'/img/neptune2.jpg','is_image'=>true]);
        $e->fileConnection()->create(['src'=>'/img/neptune3.jpg','is_image'=>true]);
        $e->primary_image_id = $e->images()->first()->id;
        $e->save();



        $f=\App\boat_model::create(
            ['hull_style_id'=>3,
            'name'=>'Atlas',
            'short_description'=>"Nottingham Boat Co's flagship vessel. This is a twist on the dutch style barge ",

            'comparison'=>'This is your do-anything boat. Build with a chined hull, this boat can be specified to category C. This makes the Atlas ideally suited to those who don&#39;t want to be contstrained to cruising just the rivers and canals. A more rounded bow, reminiscent of a Dutch Tjalk, sets this boat apart from the other barges.
                <br>Pros:
                <ul class="ul-visible">
                    <li>Chined Hull</li>
                    <li>Extended cruising grounds</li>
                    <li>Exceptional boat handling characteristics</li>
                </ul>
                <br>Cons:
                <ul class="ul-visible">
                    <li>More expensive - chined hulls add to the cost of these boats</li>
                    <li>Careful though required in fitout to make the most of the space</li>
                </ul>

            ',
            
            'long_description'=>'CAD designed from the ground up, the attention to detail on this boat is absolutley breathtaking. Equally suited to cruising at home or on the continent, this boat will take you places. With the possibility of building to Category C specification, the sturdyness of this boat can extend your cruising grounds past just rivers and canals. This boat cuts effortlessly and gracefully through the water, owing its good nature to the chined hull.']
        );
        $f->fileConnection()->create(['src'=>'/img/atlas.jpeg','is_image'=>true]);
        $f->primary_image_id = $f->images()->first()->id;
        $f->save();



/*=============================================================================================================
===============================================================================================================
    Widebeams  
===============================================================================================================
=============================================================================================================*/

        $g=\App\boat_model::create(

            ['hull_style_id'=>2,
            'name'=>'Galaxy',
            'short_description'=>'The Galaxy is the blank canvas on which to paint the picture of your ideal life.',

            'comparison'=>'The Galaxy the perfect liveaboard vessel for those looking to maximise space. The extra width gives you the flexibility to have a number of interior layouts while retaining the outside relaxing space of the bow well deck.
                <br>Pros:
                <ul class="ul-visible">
                    <li>Maximum Space and practicality</li>
                    <li>Value For Money - Often VAT free</li>
                    <li>Comfortable outside space in the bow well deck</li>
                </ul> 
                <br>Cons:
                <ul class="ul-visible">
                    <li>Restricted cruising ground</li>
                    <li>Less traditional</li>
                    <li>Less "boaty" than a barge</li>
                </ul>',
            
            'long_description'=>'The Galaxy is built to be incredibly comfortable and easy to live on. Practicality and usability are are the forefront of the design of this boat. With the amazing spaces and designs of the interior, it is easy to forget you are on a boat. The inside of a Galaxy has the feel of a luxury apartment.',
            'virtual_tour'=>'http://www.mi360.net/Boats/NBC_Galaxy/_auto/html5/NBC_Galaxy.html'
        ]
        ); 
        $g->fileConnection()->create(['src'=>'/img/galaxy1.jpg','is_image'=>true]);
        $g->fileConnection()->create(['src'=>'/img/galaxy2.jpg','is_image'=>true]);
        $g->fileConnection()->create(['src'=>'/img/galaxy3.jpg','is_image'=>true]);
        $g->fileConnection()->create(['src'=>'/img/img1.jpg','is_image'=>true]);
        $g->primary_image_id = $g->images()->first()->id;
        $g->save();                   

    }
}
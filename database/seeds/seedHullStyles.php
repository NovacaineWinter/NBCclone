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

        	'short_description'=>'The traditional look combined with modern technology. Narrowboats are the quintessential canal vessel.',
        	
            'comparison'=>'If cruising every inch of the waterways network is your main priority, then a narrowboat is the natural choice for you. <br><br>Careful design and planning maximize the usefulness of space onboard, however, space is still at a premium. Narrowboats are all about getting out and going cruising.
            <br>Pros:
            <ul class="ul-visible">
                <li>Traditional</li>
                <li>Go-anywhere ability</li>
                <li>Multiple hull configurations to choose from</li>
            </ul>
            <br>Cons:
            <ul class="ul-visible">
                <li>Less space than other hull styles</li>
                <li>More expensive per square foot - (VAT is always payable)</li>
                <li>Freestanding furniture can be problematic</li>
            </ul>',
            
            'long_description'=>'With the ability to travel anywhere, Narrowboats offer the ultimate freedom to explore. With the traditional look that never tires, narrowboats deliver the quintessential waterways experience. With their origins in traditional working craft, the narrowboat of today represents a significant improvement on the vessels of old. <br> Modern technology, careful thought and meticulous planning go into each and every one of our narrowboats, each perfectly tailored to suit its purpose. Given that space is at a premium onboard a narrowboat, the design of the interior must maximize the space available to make the most useable boat possible. It is through attention to detail and listening to customer requirements that make life on board one of our boats a sublime, stress-free experience.']
        );
        $a->fileConnection()->create(['src'=>'/img/dynasty2.jpg','is_image'=>true]);
        $a->fileConnection()->create(['src'=>'/img/dynasty1.jpg','is_image'=>true]);
        $a->fileConnection()->create(['src'=>'/img/dynasty3.jpg','is_image'=>true]);
        $a->fileConnection()->create(['src'=>'/img/cygnet1.jpg','is_image'=>true]);
        $a->fileConnection()->create(['src'=>'/img/cygnet2.jpg','is_image'=>true]);
        $a->fileConnection()->create(['src'=>'/img/cygnet3.jpg','is_image'=>true]);
        $a->primary_image_id = $a->images()->first()->id;
        $a->save();




        $b = \App\hull_style::create(
        	['name'=>'Widebeam',

        	'short_description'=>'Amazing living spaces with flexible options. A widebeam gives you the freedom to do what you want.',
            
            'comparison'=>'A widebeam is the perfect liveaboard vessel for those looking to maximise space. The extra width gives you the flexibility to have a number of interior layouts while retaining the outside relaxing space of the bow well deck. While widebeams cannot go everywhere on the waterways network, they are able to get to a lot of places. If you plan on cruising, a narrowboat can feel like the more obvious choice, but if you look into how far you can actually cruise in the time available to you, a widebeam might be a better choice. 
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
            
            'long_description'=>'Our widebeams are build to be incredibly comfortable and easy to live on. Practicality and usability are are the forefront of the design of these boats. With the amazing spaces and designs of the interior, it is easy to forget you are on a boat. The inside of a widebeam has the feel of a luxury apartment.']
        );
        $b->fileConnection()->create(['src'=>'/img/galaxy1.jpg','is_image'=>true]);
        $b->fileConnection()->create(['src'=>'/img/galaxy2.jpg','is_image'=>true]);
        $b->fileConnection()->create(['src'=>'/img/galaxy3.jpg','is_image'=>true]);
        $b->fileConnection()->create(['src'=>'/img/img1.jpg','is_image'=>true]);
        $b->primary_image_id = $b->images()->first()->id;
        $b->save();





        $c = \App\hull_style::create(
        	['name'=>'Barge',

        	'short_description'=>'Exquisite craft, a perfect combination of traditional charm and liveable practicality.',

        	'comparison'=>'Barges often represent the perfect balance of traditional looks, livable space and modern technology. Every inch of these boats are designed to be inspiring. They are nearly as spacious as a widebeam, enjoying a 12ft beam. Barges have wide side decks and hand rails allowing for easy access to the bow. Barges do not have the bow well deck as found on a widebeam. This change allows for more interior space while retaining outdoor space at the back of the boat.
            <br>Pros:
            <ul class="ul-visible">
                <li>Timeless design</li>
                <li>Plentiful interior space</li>
                <li>Beautiful steelwork</li>
            </ul> 
            <br>Cons:
            <ul class="ul-visible">
                <li>More expensive - the craftsmanship involved in producing the hull means these boats cost more</li>
                <li>Restricted cruising ground - as per the widebeam</li>
                <li>No front well deck</li>
            </ul>',

        	'long_description'=>'Barges for most are the cream of the crop. These boats ooze charm and sophistication. The craftsmanship that goes into forming the steel of the hull is matched by the attention to detail of the interior design.']
        );
        $c->fileConnection()->create(['src'=>'/img/jupiter.jpg','is_image'=>true]);
        $c->fileConnection()->create(['src'=>'/img/neptune1.jpg','is_image'=>true]);
        $c->fileConnection()->create(['src'=>'/img/neptune2.jpg','is_image'=>true]);
        $c->fileConnection()->create(['src'=>'/img/neptune3.jpg','is_image'=>true]);
        $c->primary_image_id = $c->images()->first()->id;
        $c->save();
    }
}

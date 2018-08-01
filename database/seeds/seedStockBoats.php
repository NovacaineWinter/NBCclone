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
            	['title'=>'Jupiter Barge 70ft x 12ft',
            	'description'=>'
                    Luxury made efficient.<br>
                    <ul>
                        <li>Engine Vetus VH4.80: 80hp</li>
                        <li>Twin 115amp alternators and ZF25 Hydraulic Gearbox</li>
                        <li>4 berth</li>
                        <li>Sapele Wheelhouse: Hydraulically raising and lowering roof with electric sliding hatch and hinged windows</li>
                        <li>2nd Bedroom with Rock and Rolla, ¾ double bed/couch, fitted with made to measure cushions</li>
                        <li>5 x 220amp AGM leisure batteries, 1 x 105amp engine starter battery</li>
                        <li>Navy blue pinstripes and light blue D-bar trim. Satin navy blue below the gunwales with light blue D-bar trims. Stern is navy blue above the gunwales with white block, navy blue and light blue trim</li>

                        <li>Double glazed windows.</li>

                    </ul>
                ',
            	'short_summary'=>'Everything, to the last detail, has been planned to give you absolute comfort. Luxury made efficient',
            	'configuration_id'=>15,
            	'price_ex_vat'=>250000,
                'virtual_tour'=>'https://my.matterport.com/show/?m=nPXW1hNR4Mp'
            ]
            );
            $a->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true]);
            $a->primary_image_id = $a->images()->first()->id;
            $a->save();

 

            $c = \App\stock_boat::create(
                ['title'=>'Atlas Barge',
                'description'=>'
                    Atlas is... “A modern interpretation of traditional style”.

                    From the well-equipped wheelhouse to the shapely bow, the new Atlas nods politely at the past while resolutely looking to the future.

                    Although taking many styling cues from barges we are all familiar with, the Atlas incorporates features and manufacturing technics not typically associated with inland waterways vessels.

                    Chined Hull
                    While visually offering a sleeker profile when out of the water, the chined hull really pays-off once afloat:


                    Improved maneuverability and response to the helm.
                    Improved stability at the point of heel.
                    Ability to moor closer to the bank on shallow edged waterways.
                    21 st Century Manufacturing
                    The Atlas has been entirely designed and realised using CAD. As such, we were able to produce each individual component of the hull to accurate and exacting standards. By designing in this manner, we have been able to reduce the weight of the vessel by approximately 10-15% while retaining structural integrity.


                    Style:
                    In standard configuration, the Atlas is supplied with a wheelhouse, quality equipment/fittings and luxury internal fixtures, however with a multitude of available upgrades you can tailor the fit and finish to your exact requirements.
                ',
                'short_summary'=>'
                    PoA - Price on Application.

                    Atlas is currently in build. Details of interior fit-out & Spec Sheet COMING SOON!
                ',
                'configuration_id'=> 39,
                'price_ex_vat'=>0]
            );
            $c->fileConnection()->create(['src'=>'/img/nbcDefault.png','is_image'=>true]);
            $c->primary_image_id = $c->images()->first()->id;
            $c->save();


            $b = \App\stock_boat::create(
            	['title'=>'Dynasty Narrowboat',
            	'description'=>'
                    The Dynasty is specifically designed and made to give the whole family a comfortable, warm, easy to use Narrowboat. The interior uses the same light, high quality, luxurious, ash wood finish as our other production boats.
                    Six berths and enough space for everybody, the Dynasty is ready for you to take her on amazing adventures.
                    Cruising with your family or friends, has never been more carefree <br><br>


                    <ul>
                        <li>6 berth, 4 fixed, 1 king-size double, 2 bunks and 2 as a dinette in the saloon</li>
                        <li>Additional 3ft in length, making her 60ft</li>
                        <li>4 x 110amp AGM Gel leisure batteries and 1 x 105amp starter</li>
                        <li>Double glazed windows</li>
                        <li>All soft furnishings</li>
                        <li>Central heating</li>
                        <li>Cruising kit</li>
                        <li>Diesel in the tank</li>
                        <li>R.C.D. (Recreational Craft Directive) documentation</li>
                    <ul>
                ',
            	'short_summary'=>'Colourful and spacious, let us introduce you to the Dynasty Narrow Boat.',
            	'configuration_id'=> 69,
            	'price_ex_vat'=>128000,
                'virtual_tour'=>'https://my.matterport.com/show/?m=ppsMWJeALaZ'
            ]
            );
            $b->fileConnection()->create(['src'=>'/img/386/5.jpg','is_image'=>true]);
            $b->fileConnection()->create(['src'=>'/img/386/1.jpg','is_image'=>true]);
            $b->fileConnection()->create(['src'=>'/img/386/2.jpg','is_image'=>true]);
            $b->fileConnection()->create(['src'=>'/img/386/3.jpg','is_image'=>true]);
            $b->fileConnection()->create(['src'=>'/img/386/4.jpg','is_image'=>true]);
            $b->fileConnection()->create(['src'=>'/img/386/6.jpg','is_image'=>true]);
            $b->fileConnection()->create(['src'=>'/img/386/7.jpg','is_image'=>true]);
            $b->fileConnection()->create(['src'=>'/img/386/8.jpg','is_image'=>true]);
            $b->fileConnection()->create(['src'=>'/img/386/9.jpg','is_image'=>true]);
            $b->fileConnection()->create(['src'=>'/img/386/10.jpg','is_image'=>true]);
            $b->fileConnection()->create(['src'=>'/img/386/11.jpg','is_image'=>true]);
            $b->fileConnection()->create(['src'=>'/img/386/12.jpg','is_image'=>true]);
            $b->fileConnection()->create(['src'=>'/img/386/13.jpg','is_image'=>true]);
            $b->fileConnection()->create(['src'=>'/img/386/14.jpg','is_image'=>true]);
            $b->fileConnection()->create(['src'=>'/img/386/15.jpg','is_image'=>true]);
            $b->fileConnection()->create(['src'=>'/img/386/16.jpg','is_image'=>true]);
            $b->fileConnection()->create(['src'=>'/img/386/17.jpg','is_image'=>true]);
            $b->fileConnection()->create(['src'=>'/img/386/18.jpg','is_image'=>true]);
            $b->fileConnection()->create(['src'=>'/img/386/19.jpg','is_image'=>true]);
            $b->fileConnection()->create(['src'=>'/img/386/20.jpg','is_image'=>true]);
            $b->fileConnection()->create(['src'=>'/img/386/21.jpg','is_image'=>true]);
            $b->fileConnection()->create(['src'=>'/img/386/22.jpg','is_image'=>true]);
            $b->fileConnection()->create(['src'=>'/img/386/23.jpg','is_image'=>true]);
            $b->fileConnection()->create(['src'=>'/img/386/24.jpg','is_image'=>true]);
            $b->fileConnection()->create(['src'=>'/img/386/25.jpg','is_image'=>true]);
            $b->fileConnection()->create(['src'=>'/img/386/26.jpg','is_image'=>true]);
            $b->fileConnection()->create(['src'=>'/img/386/27.jpg','is_image'=>true]);
            $b->fileConnection()->create(['src'=>'/img/386/28.jpg','is_image'=>true]);
            $b->fileConnection()->create(['src'=>'/img/386/29.jpg','is_image'=>true]);
            $b->fileConnection()->create(['src'=>'/img/386/30.jpg','is_image'=>true]);
            $b->fileConnection()->create(['src'=>'/img/386/31.jpg','is_image'=>true]);
            $b->primary_image_id = $b->images()->first()->id;
            $b->save();
                          
    }
}

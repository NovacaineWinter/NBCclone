<?php

use Illuminate\Database\Seeder;

class defaultData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		//seed with the default data

        $fitoutLevels = [
            ['name'=>'Hull Only','description'=>'Bare metal hull - All steelwork in place but no Battens'],
            ['name'=>'Sailaway','description'=>'Engine fitted. Interior sprayfoamed and Battened. Ballasted and ply floor fitted'],
            ['name'=>'Sailaway Plus','description'=>'As per standard Sailaway plus interior fully lined out']
        ];

        $hullStyles = [
            ['name'=>'Narrowboat','description'=>'Narrowboats','img'=>'img/nb.jpg'],
            ['name'=>'Widebeam','description'=>'Widebeams from 9-12ft wide','img'=>'img/img1.jpg'],
        ];

        $optionCategories = ['Paintwork','External','Engine & Systems','Glazing','Electrical','Internal'];

        foreach($optionCategories as $opt){
            $optionCategoryToCreate = new option_category;
            $optionCategoryToCreate->name = $opt;
            $optionCategoryToCreate->save();
        }

        $wideWidths =[9,10,11,12];
        $narrowWidths= [6];
        $lengths = [50,57,60,65,70];

        foreach($lengths as $length){
            $lengthToMake = new length;
            $lengthToMake->ft = $length;
            $lengthToMake->save();
            unset($lengthToMake);
        }

        foreach($wideWidths as $width){
            $widthToMake = new width;
            $widthToMake->ft = $width;
            $widthToMake->save();
            unset($widthToMake);
        }
        
        foreach($narrowWidths as $width){
            $widthToMake = new width;
            $widthToMake->ft = $width;
            $widthToMake->save();
            unset($widthToMake);
        }
        foreach($fitoutLevels as $fit){
            $toMake = new fitout_level;
            $toMake->name = $fit['name'];
            $toMake->description = $fit['description']; 
            $toMake ->save();
            unset($toMake); 
        }

        $fitouts = fitout_level::all();
        $lens = length::all();
        $widewid = width::where('ft','>',8)->get();
        $narrowWid = width::where('ft','=',6)->get();

        foreach($hullStyles as $hull){
            $toMake = new hull_style;
            $toMake->name = $hull['name'];
            $toMake->description = $hull['description']; 
            $toMake->img = $hull['img']; 
            $toMake ->save();
            unset($toMake); 
        }

        foreach($widewid as $width){
            foreach($lens as $length){
                foreach($fitouts as $fit){
                    $configToMake = new configuration;

                    $configToMake->fitout_level_id =$fit->id;
                    $configToMake->hull_style_id =2;
                    $configToMake->length_id=$length->id;
                    $configToMake->width_id=$width->id;
                    $configToMake->active  =1;
                    $configToMake->description= $length->ft.'ft x '.$width->ft.'ft Widebeam '.$fit->name;
                    $configToMake->baseprice =0;

                    $configToMake->save();
                    unset($configToMake);
                }
            }
        }

        foreach($narrowWid as $width){
            foreach($lens as $length){
                foreach($fitouts as $fit){
                    $configToMake = new configuration;

                    $configToMake->fitout_level_id =$fit->id;
                    $configToMake->hull_style_id =1;
                    $configToMake->length_id=$length->id;
                    $configToMake->width_id=$width->id;
                    $configToMake->active  =1;
                    $configToMake->description= $length->ft.'ft x '.$width->ft.'ft Narrowboat '.$fit->name;
                    $configToMake->baseprice =0;

                    $configToMake->save();
                    unset($configToMake);
                }
            }
        }
    }
}

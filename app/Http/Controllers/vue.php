<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vue extends Controller
{

/*=======================================================================================================================================
        *******************************************************************************************************************************
=======================================================================================================================================*/


    public function data($target){

    	switch($target){
            
    		case 'hull-styles':
    			$data = \App\hull_style::with('files','images')->get();
    			break;


    		case 'all-data':
    			$data['configurations'] =	\App\configuration::all();
    			$data['hull_styles'] 	=	\App\hull_style::with('files','images','infobites.fileConnection')->get();
    			$data['boat_models'] 	=	\App\boat_model::with('files','images','infobites.fileConnection')->get();
    			$data['beams'] 		    =	\App\width::all();
    			$data['loas'] 		    =	\App\length::all();
    			$data['trim_levels'] 	=	\App\trim_level::with('files','images','infobites.fileConnection')->get();
                $data['generic']        =   \App\generic::find(1)->with('infobites.fileConnection')->get();                
    			return $data;


            case 'stock-boats':
                return \App\stock_boat::with('files','images')->get();
    	}
    
    	return $data;
    }



/*=======================================================================================================================================
        *******************************************************************************************************************************
=======================================================================================================================================*/



    public function update(Request $request){

        if($request->has('model')){

            switch($request->get('model')){

                case 'hull':                  

                    if($request->has('target')){
                        $info = json_decode($request->get('target'),true);
                        if(isset($info['comparison'])){

                            $hull = \App\hull_style::find($info['id']);
                            
                            $hull->name =$info['name'];
                            $hull->comparison =$info['comparison'];
                            $hull->long_description =$info['long_description'];
                            $hull->short_description =$info['short_description'];
                            $hull->primary_image_id = $info['primary_image_id'];
                            $hull->save();


                            return ('Ok');
                        }else{abort(501);}
                    }else{abort(501);}
                    break; 



                case 'model':                  

                    if($request->has('target')){
                        $info = json_decode($request->get('target'),true);
                        if(isset($info['comparison'])){

                            $model = \App\boat_model::find($info['id']);
                            
                            $model->name =$info['name'];
                            $model->comparison =$info['comparison'];
                            $model->long_description =$info['long_description'];
                            $model->short_description =$info['short_description'];
                            $model->primary_image_id = $info['primary_image_id'];
                            $model->hull_style_id = $info['hull_style_id'];
                            $model->save();


                            return ('Ok');
                        }else{abort(501);}
                    }else{abort(501);}
                    break;


                case 'trim':                  

                    if($request->has('target')){
                        $info = json_decode($request->get('target'),true);
                        if(isset($info['comparison'])){

                            $trim = \App\trim_level::find($info['id']);
                            
                            $trim->name =$info['name'];
                            $trim->comparison =$info['comparison'];
                            $trim->long_description =$info['long_description'];
                            $trim->short_description =$info['short_description'];
                            $trim->primary_image_id = $info['primary_image_id'];
                            $trim->save();


                            return ('Ok');
                        }else{abort(501);}
                    }else{abort(501);}
                    break;                       


                }       
            }else{abort(501);}
        }


/*=======================================================================================================================================
        *******************************************************************************************************************************
=======================================================================================================================================*/


        public function primaryImage(Request $request){

            if($request->has('target') && $request->has('model') && $request->has('image_id')){
                $info = json_decode($request->get('target'),true);
                
                switch($request->get('model')){


                    case 'hull':
                        $toModify = \App\hull_style::find($info['id']);
                        break;

                    case 'model':
                        $toModify = \App\boat_model::find($info['id']);
                        break; 

                    case 'trim':
                        $toModify = \App\trim_level::find($info['id']);
                        break; 

                }

                if(isset($toModify)){
                    echo 'To modify working';
                    foreach($toModify->images as $image){
                        if($image->id == $request->get('image_id')){
                            $image->is_primary = true;
                            $image->save();
                        }else{
                            $image->is_primary = false;
                            $image->save();
                        }
                    }
                }
            }

        }

/*=======================================================================================================================================
        *******************************************************************************************************************************
=======================================================================================================================================*/


        public function newImage(Request $request){
            if($request->hasFile('file') && $request->has('model') && $request->has('target')){

               
                switch($request->get('model')){                    
                    case 'hull':
                        $toAddTo = \App\hull_style::find($request->get('target'));
                        break;

                    case 'model':
                        $toAddTo = \App\boat_model::find($request->get('target'));
                        break;

                    case 'trim':
                        $toAddTo = \App\trim_level::find($request->get('target'));
                        break;
                }

                return $toAddTo->newImage($request->file('file'));

            }else{
                abort(420);
            }
        }



/*=======================================================================================================================================
        *******************************************************************************************************************************
=======================================================================================================================================*/



        public function deleteImage(Request $request){

             if($request->has('target_img')){                

                $toDelete = \App\file::find($request->get('target_img'));

                $toDelete->deleteFile();


            }else{
                abort(420);
            }
        }        



/*=======================================================================================================================================
        *******************************************************************************************************************************
=======================================================================================================================================*/


        public function updateImage(Request $request){

            if($request->has('target')){

                $info = json_decode($request->get('target'),true);

                $file = \App\file::find($info['id']);

                $file->is_in_carousel = $info['is_in_carousel'];
                $file->description = $info['description'];
                $file->save();

            }else{
                abort(420);
            }

        }




/*=======================================================================================================================================
        *******************************************************************************************************************************
=======================================================================================================================================*/



    public function newInfobite(Request $request) {

        $this->validate(request(),[
            'file'          =>  'required|file',
            'title'         =>  'required',
            'description'   =>  'required',
            'model'         =>  'required',
            'target'        =>  'required'
        ]);
              
        switch($request->get('model')){                    
            case 'hull':
                $toAddTo = \App\hull_style::find($request->get('target'));
                break;

            case 'model':
                $toAddTo = \App\boat_model::find($request->get('target'));
                break;

            case 'trim':
                $toAddTo = \App\trim_level::find($request->get('target'));
                break;
        }

        $new = $toAddTo->newInfobite($request->file('file'), $request->get('title'),$request->get('description'));
        /*$toReturn = \App\infobites::find($new->id)*/
        return $new->with('fileConnection')->get();
        //return 'ok';



    }


/*=======================================================================================================================================
        *******************************************************************************************************************************
=======================================================================================================================================*/


    public function deleteInfobite(Request $request){
        $this->validate(request(),[
            'targetid'          =>  'required',
        ]);

        \App\infobites::find($request->get('targetid'))->delete();
    }


/*=======================================================================================================================================
        *******************************************************************************************************************************
=======================================================================================================================================*/


    public function analytics(){
        return view('tracking.nbc');
    }




/*=======================================================================================================================================
        *******************************************************************************************************************************
=======================================================================================================================================*/

    public function allStockBoats(){
        return \App\stock_boat::all();
    }



/*=======================================================================================================================================
        *******************************************************************************************************************************
=======================================================================================================================================*/
//end of class
}
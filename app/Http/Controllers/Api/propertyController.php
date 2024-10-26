<?php

namespace App\Http\Controllers\Api;


use Illuminate\Http\Request;
use App\Models\property;
use App\Http\Controllers\Api\BaseController;

class propertyController extends BaseController
{
    public function index(){
        $data=property::get();
        return $this->sendResponse($data,"property data");
    }

    public function store(Request $request){
   /* for files */
   $input=$request->all();
   $files=[];
   if($request->hasFile('files')){
       foreach($request->file('files') as $f){
           $imagename=time().rand(1111,9999).".".$f->extension();
           $imagePath=public_path().'/addproperty';
           if($f->move($imagePath,$imagename)){
               array_push($files,$imagename);
           }
       }
   }
   $input['image']=implode(',',$files);
   /* /for files */

        $data=property::create($input);
        return $this->sendResponse($data,"property created successfully");
    }
    public function show(property $property){
        return $this->sendResponse($property,"property created successfully");
    }

    public function update(Request $request,$id){

        $input=$request->all();
        /* for files */
        $files=[];
        if($request->hasFile('files')){
            foreach($request->file('files') as $f){
                $imagename=time().rand(1111,9999).".".$f->extension();
                $imagePath=public_path().'/addproperty';
                if($f->move($imagePath,$imagename)){
                    array_push($files,$imagename);
                }
            }
            $input['image']=implode(',',$files);
        }
        unset($input['files']);

        $property=property::where('id',$id)->update($input);
        return $this->sendResponse($id,"property updated successfully");
    }

    public function destroy(property $property)
    {
        $property=$property->delete();
        return $this->sendResponse($property,"property deleted successfully");
    }
}

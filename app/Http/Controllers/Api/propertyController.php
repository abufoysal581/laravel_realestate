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
        $data=property::create($request->all());
        return $this->sendResponse($data,"property created successfully");
    }
    public function show(property $property){
        return $this->sendResponse($property,"property created successfully");
    }

    public function update(Request $request,$id){

        $data=property::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"property updated successfully");
    }

    public function destroy(property $property)
    {
        $property=$property->delete();
        return $this->sendResponse($property,"property deleted successfully");
    }
}

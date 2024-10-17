<?php

namespace App\Http\Controllers\Api;

use App\Models\SoldPropertyList;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController;

class SoldPropertyController extends BaseController
{
    public function index(){
        $data=SoldPropertyList::get();
        return $this->sendResponse($data,"SoldPropertyList data");
    }

    public function store(Request $request){
        $data=SoldPropertyList::create($request->all());
        return $this->sendResponse($data,"RentedPropertyList created successfully");
    }
    public function show(SoldPropertyList $SoldPropertyList){
        return $this->sendResponse($SoldPropertyList,"SoldPropertyList created successfully");
    }

    public function update(Request $request,$id){

        $data=RentedPropertyList::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"RentedPropertyList updated successfully");
    }

    public function destroy(SoldPropertyList $SoldPropertyList)
    {
        $SoldPropertyList=$SoldPropertyList->delete();
        return $this->sendResponse($SoldPropertyList,"SoldPropertyList deleted successfully");
    }
}

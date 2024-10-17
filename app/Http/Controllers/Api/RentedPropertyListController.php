<?php

namespace App\Http\Controllers\Api;

use App\Models\RentedPropertyList;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController;

class RentedPropertyListController extends BaseController
{
    public function index(){
        $data=RentedPropertyList::get();
        return $this->sendResponse($data,"RentedPropertyList data");
    }

    public function store(Request $request){
        $data=RentedPropertyList::create($request->all());
        return $this->sendResponse($data,"RentedPropertyList created successfully");
    }
    public function show(RentedPropertyList $rentedpropertylist){
        return $this->sendResponse($rentedpropertylist,"RentedPropertyList created successfully");
    }

    public function update(Request $request,$id){

        $data=RentedPropertyList::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"RentedPropertyList updated successfully");
    }

    public function destroy(RentedPropertyList $rentedpropertylist)
    {
        $rentedpropertylist=$rentedpropertylist->delete();
        return $this->sendResponse($rentedpropertylist,"RentedPropertyList deleted successfully");
    }
}

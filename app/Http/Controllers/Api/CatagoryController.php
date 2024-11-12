<?php

namespace App\Http\Controllers\Api;

use App\Models\catagory;
use App\Http\Controllers\Api\BaseController;
use Illuminate\Http\Request;

class CatagoryController extends BaseController
{
    public function index(){
        $data=catagory::get();
        return $this->sendResponse($data,"catagory data");
    }

    public function store(Request $request){
        $data=catagory::create($request->all());
        return $this->sendResponse($data,"catagory created successfully");
    }
    public function show(catagory $catagory){
        return $this->sendResponse($catagory,"catagory created successfully");
    }

    public function update(Request $request,$id){

        $data=catagory::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"catagory updated successfully");
    }

    public function destroy(catagory $catagory)
    {
        $catagory=$catagory->delete();
        return $this->sendResponse($catagory,"catagory deleted successfully");
    }
}

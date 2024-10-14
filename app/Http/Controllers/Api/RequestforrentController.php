<?php

namespace App\Http\Controllers\Api;

use App\Models\RequestsForRent;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController;

class RequestforrentController extends BaseController
{
    public function index(){
        $data=requestsForRent::get();
        return $this->sendResponse($data,"request_for_rents data");
    }

    public function store(Request $request){
        $data=requestsForRent::create($request->all());
        return $this->sendResponse($data,"requestsForRent created successfully");
    }
    public function show(requestsForRent $request_for_rents){
        return $this->sendResponse($requestsforrent,"requestsForRent created successfully");
    }

    public function update(Request $request,$id){

        $data=requestsForRent::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"requestsForRent updated successfully");
    }

    public function destroy(requestsForRent $property)
    {
        $requestsforrent=$requestsforrent->delete();
        return $this->sendResponse($requestsforrent,"requestsForRent deleted successfully");
    }
}

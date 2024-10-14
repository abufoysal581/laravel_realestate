<?php

namespace App\Http\Controllers\Api;

use App\Models\RequestsForBuying;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController;

class RequestsForBuyingController extends BaseController
{
    public function index(){
        $data=RequestsForBuying::get();
        return $this->sendResponse($data,"RequestsForBuying data");
    }

    public function store(Request $request){
        $data=RequestsForBuying::create($request->all());
        return $this->sendResponse($data,"RequestsForBuying created successfully");
    }
    public function show(RequestsForBuying $request_for_rents){
        return $this->sendResponse($RequestsForBuying,"RequestsForBuying created successfully");
    }

    public function update(Request $request,$id){

        $data=RequestsForBuying::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"RequestsForBuying updated successfully");
    }

    public function destroy(RequestsForBuying $property)
    {
        $RequestsForBuying=$RequestsForBuying->delete();
        return $this->sendResponse($RequestsForBuying,"RequestsForBuying deleted successfully");
    }
}

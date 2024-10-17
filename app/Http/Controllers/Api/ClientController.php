<?php

namespace App\Http\Controllers\Api;

use App\Models\clients;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController;

class ClientController extends BaseController
{
    public function index(){
        $data=clients::get();
        return $this->sendResponse($data,"clients data");
    }

    public function store(Request $request){
        $data=clients::create($request->all());
        return $this->sendResponse($data,"clients created successfully");
    }
    public function show(clients $clients){
        return $this->sendResponse($clients,"clients created successfully");
    }

    public function update(Request $request,$id){

        $data=clients::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"RentedPclientsropertyList updated successfully");
    }

    public function destroy(clients $clients)
    {
        $clients=$clients->delete();
        return $this->sendResponse($clients,"clients deleted successfully");
    }
}

<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\allocations;
use App\Http\Controllers\Api\BaseController;

class AllocationsController extends BaseController
{
    public function index(){
        $data=allocations::get();
        return $this->sendResponse($data,"allocations data");
    }

    public function store(Request $request){
        $data=allocations::create($request->all());
        return $this->sendResponse($data,"allocations created successfully");
    }
    public function show(allocations $allocations){
        return $this->sendResponse($allocations,"allocations created successfully");
    }

    public function update(Request $request,$id){

        $data=allocations::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"allocations updated successfully");
    }

    public function destroy(allocations $allocations)
    {
        $allocations=$allocations->delete();
        return $this->sendResponse($allocations,"allocations deleted successfully");
    }
}

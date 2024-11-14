<?php

namespace App\Http\Controllers\Api;

use App\Models\Payments;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController;

class PaymentsController extends BaseController

{
    public function index(){
        $data=payments::get();
        return $this->sendResponse($data,"payments data");
    }

    public function store(Request $request){
        $data=payments::create($request->all());
        return $this->sendResponse($data,"payments created successfully");
    }
    public function show(payments $payments){
        return $this->sendResponse($payments,"payments created successfully");
    }

    public function update(Request $request,$id){

        $data=payments::where('id',$id)->update($request->all());
        return $this->sendResponse($id,"payments updated successfully");
    }

    public function destroy(payments $payments)
    {
        $payments=$payments->delete();
        return $this->sendResponse($payments,"payments deleted successfully");
    }
}

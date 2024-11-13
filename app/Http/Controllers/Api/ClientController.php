<?php

namespace App\Http\Controllers\Api;

use App\Models\clients;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController;
use Illuminate\Http\JsonResponse;
use Validator;
use Illuminate\Support\Facades\Hash;

class ClientController extends BaseController
{
    public function registerclient(Request $r): JsonResponse
    {
        $validate=Validator::make($r->all(),[
            'client_name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required',
            'c_password'=>'required|same:password'
        ]);

        if($validate->fails()){
            return $this->sendError($validate->errors(),"Validation Error",203);
        }

        $input= $r->all();
        $input['password']=bcrypt($input['password']);
        $clients=clients::create($input);
        $data['token']=$clients->createToken('hosp')->plainTextToken;
        $data['data']=$clients;
        return $this->sendResponse($data,"clients register successfully");

    }

    public function loginclients(Request $request)
    {
        try{
            $clients=clients::where('email',$request->email)->first();
            if($clients){
                if(Hash::check($request->password , $customer->password)){
                    $data['token']=$clients->createToken('hosp')->plainTextToken;
                    $data['data']=$clients;
                    return $this->sendResponse($data,"clients login successfully");
                }else
                    return $this->sendError(['error'=>'email or password is not correct1'],"Unauthorized",400);
               
            }else
                return $this->sendError(['error'=>'email or password is not correct3'],"Unauthorized",400);
        }catch(Exception $e){
            dd($e);
             return $this->sendError(['error'=>'email or password is not correct4'],"Unauthorized",400);
        }
    }


}

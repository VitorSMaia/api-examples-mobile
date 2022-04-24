<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\User;
// use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function register(UserRequest $request)
    {
        $userRequest = $request->all();
        $userRequest['password'] = bcrypt($userRequest['password']);
        $user = User::create($userRequest);
        $success['token'] =  $user->createToken('_token')->plainTextToken;
        $success['name'] =  $user->name;
   
        return response()->json([$success, 'User register successfully.']);
    }
   
    /**
     * Login api
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){ 
            $user = Auth::user(); 
            $success['token'] =  $user->createToken('_token')->plainTextToken; 
            $success['name'] =  $user->name;
   
            return response()->json([$success, 'User login successfully.']);
        } 
        else{ 
            return response()->json(['Unauthorised.', ['error'=>'Unauthorised']]);
        } 
    }
}

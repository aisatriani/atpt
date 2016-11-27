<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginRegisterApiController extends Controller
{
    public function login(Request $request){

        $this->validate($request, [
            'username'=> 'required',
            'password'=> 'required'
        ]);

        $input = $request->all();

        if(Auth::attempt(['username'=>$input['username'],'password'=>$input['password']])){
            $user = $request->user();
            $resp = User::with('ContactPerson')->where('id',$user->id)->first();
            return $resp;
        }

        return response('username atau password salah',403);

    }

    public function register(Request $request){

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:users',
            'username' => 'required|unique:users',
            'password' => 'required'
        ]);

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $input['api_token'] = str_random(60);

        //dd($input);

        $user = User::create($input);
        return $user;
    }
}

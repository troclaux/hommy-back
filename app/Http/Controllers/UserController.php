<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function createUser(Request $request){
        $user = new User;

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->age = $request->age;
        $user->phone_number = $request->phone_number;
        $user->cpf = $request->cpf;
        $user->password = $request->password;
        $user->credit_card = $request->credit_card;

        $user->save();
        return response()->json($user);
    }

    public function showDorm($id){
        $dorm = Dorm::findOrFail($id);
        return response()->json([$dorm]);
    }

    public function listUser(){
        $user = User::all();
        return response()->json([$user]);
    }

    public function updateUser(Request $request, $id){
        $user = User::findOrFail($id);

        if($request->name){
            $user->name = $request->name;
        }
        if($request->email){
            $user->email = $request->email;
        }
        if($request->password){
            $user->password = $request->password;
        }
        if($request->age){
            $user->age = $request->age;
        }
        if($request->phone_number){
            $user->phone_number = $request->phone_number;
        }
        if($request->cpf){
            $user->cpf = $request->cpf;
        }
        if($request->credit_card){
            $user->credit_card = $request->credit_card;
        }        

        $user->save();
        return response()->json($user);
    }

    public function deleteUser($id){
        User::destroy($id);
        return response()->json(['User deletado']);
    }

    public function addUser($user_id){
        $user = User::findOrFail($user_id);
        $user->save();
        return response()->json($user);
    }

    public function removeUser($user_id){
        $user = User::findOrFail($user_id);
        $user->save();
        return response()->json(["user"=>$user]);
    }
}

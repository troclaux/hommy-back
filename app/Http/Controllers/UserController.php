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
}

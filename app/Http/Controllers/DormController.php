<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dorm;
use App\User;

class DormController extends Controller{

    public function createDorm(Request $request){
        $dorm = new Dorm;

        $dorm->number_of_rooms = $request->number_of_rooms;
        $dorm->city = $request->city;
        $dorm->street = $request->street;
        $dorm->dorm_number = $request->dorm_number;
        $dorm->zip_code = $request->zip_code;
        $dorm->description = $request->description;
        $dorm->state_initials = $request->state_initials;

        $dorm->save();
        return response()->json($dorm);
    }

    public function showDorm($id){
        $dorm = Dorm::findOrFail($id);
        return response()->json([$dorm]);
    }

    public function listDorm(){
        $dorm = Dorm::all();
        return response()->json([$dorm]);
    }

    public function updateDorm(Request $request, $id){

        $dorm = Dorm::findOrFail($id);

        if($request->number_of_rooms){
            $dorm->number_of_rooms = $request->number_of_rooms;
        }
        if($request->city){
            $dorm->city = $request->city;
        }
        if($request->dorm_number){
            $dorm->dorm_number = $request->dorm_number;
        }
        if($request->street){
            $dorm->street = $request->street;
        }
        if($request->dorm_number){
            $dorm->dorm_number = $request->dorm_number;
        }
        if($request->zip_code){
            $dorm->zip_code = $request->zip_code;
        }
        if($request->description){
            $dorm->description = $request->description;
        }
        if($request->state_initials){
            $dorm->state_initials = $request->state_initials;
        }

        $dorm->save();
        return response()->json($dorm);
    }

    public function deleteDorm($id){
        Dorm::destroy($id);
        return response()->json(['Produto deletado']);
    }

    public function addDorm($id, $dorm_id){
        $user = User::findOrFail($id);
        $dorm = Dorm::findOrFail($dorm_id);
        $dorm->user_id=$id;
        $dorm->save();
        return response()->json($dorm);
    }

    public function removeDorm($id, $dorm_id){
        $user = User::findOrFail($id);
        $dorm = Dorm::findOrFail($dorm_id);
        $dorm->user_id=NULL;
        $dorm->save();
        return response()->json(["dorm"=>$dorm]);
    }
}

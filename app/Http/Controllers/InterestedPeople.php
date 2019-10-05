<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dog;
use App\Doglooker;
use App\Interest;
use App\User;


class InterestedPeople extends Controller
{
    public function index($dog_id){
        $allInterestsIds = Interest::where("dog_id", $dog_id)->pluck("doglooker_id");
        $dogLookers = Doglooker::whereIn('id',$allInterestsIds)->get();

        $doglookers = json_encode($dogLookers);

        foreach($dogLookers as $dogLooker){

            $user = User::find($dogLooker->user_id);
            $dogLooker->name = $user->name;
            $dogLooker->phone = $user->phone;
            $dogLooker->address = $user->address;

        }

        return response()->json($dogLookers);
    }
}

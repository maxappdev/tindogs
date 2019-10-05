<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dog;
use App\Doglooker;
use App\Interest;


class InterestedPeople extends Controller
{
    public function index($dog_id){
        $allInterestsIds = Interest::where("dog_id", $dog_id)->pluck("doglooker_id");
        $dogLookers = Doglooker::whereIn('id',$allInterestsIds)->get();
        return response()->json($dogLookers);
    }
}

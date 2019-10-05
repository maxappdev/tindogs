<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interest;
use App\DogLooker;

class InterestsController extends Controller
{
    
    public function store(Request $request){
        
        $interest = new Interest();
        $interest->dog_id = $request->dog_id;
        $interest->doglooker_id = DogLooker::where('user_id', auth('api')->user()->id)->firstOrFail()->id;
        $interest->status = 0;
        $interest->save();

        return response()->json($interest);

    }

}

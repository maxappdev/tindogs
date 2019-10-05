<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interest;
use App\User;
use App\Dog;

class DoglookerChoseDogsController extends Controller
{
    
    public function index($doglooker_id){

        $dogs_ids = Interest::where('doglooker_id', $doglooker_id)->pluck('dog_id')->toArray();
        $dogs = Dog::whereIn('id', $dogs_ids)->get();

        return response()->json($dogs);

    }

}

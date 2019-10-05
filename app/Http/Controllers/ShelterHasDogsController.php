<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shelter;
use App\shelter_has_dogs;
use App\Dog;

class ShelterHasDogsController extends Controller
{
    public function index($schelter_id){
      $dogs_ids = shelter_has_dogs::where('shelter_id',$schelter_id)->pluck('dog_id');
      $dogs = Dog::whereIn('id',$dogs_ids)->get();
      return response()->json($dogs);
    }
}

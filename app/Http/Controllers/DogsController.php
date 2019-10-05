<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dog;

class DogsController extends Controller
{

    public function index(){

        $dogs = Dog::all();

        foreach ($dogs as $dog) {
          $dog->age = $age;
        }

        dd($age);
        
        return response()->json($dogs);

    }

}

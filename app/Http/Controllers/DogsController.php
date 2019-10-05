<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dog;

class DogsController extends Controller
{


    public function getYears($age_months){

      $years = floor($age_months/12);
      $moths = $age_months%12;
      $years_string = $years == 1 ? ' Year ' : ' Years ';
      $months_string = $moths ==  1 ? ' Month' : ' Months';
      $age_string = $years.$years_string. $age_months%12 . $months_string;
      return $age_string;
    }
    public function index(){

        $dogs = Dog::all();

        foreach ($dogs as $dog) {
            $dog->age = $this->getYears($dog->age);
        }

        return response()->json($dogs);

    }


    public function show($dog_id){

        $dog = Dog::find($dog_id);


        $dog->age = $this->getYears($dog->age);


        return response()->json($dog);

    }

}

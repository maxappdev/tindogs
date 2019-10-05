<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doglooker;
use App\User;

class DoglookerController extends Controller
{ 

    public function index($doglooker_id){
      $doglooker = Doglooker::find($doglooker_id)
      ->join('users','doglookers.user_id', '=', 'users.id')
      ->select('doglookers.*', 'users.name', 'users.phone', 'users.address')
      ->get();
      return response()->json($doglooker);
    }


}

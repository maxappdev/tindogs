<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doglooker;

class DoglookerController extends Controller
{
    public function index($doglooker_id){
      $doglooker = Doglooker::find($doglooker_id);
      return response()->json($doglooker);
    }
}

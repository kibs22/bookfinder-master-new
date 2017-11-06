<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class TrialController extends Controller
{
    public function trial(){
    	return response()->json(['data'=> User::all() ]);	
    }
}

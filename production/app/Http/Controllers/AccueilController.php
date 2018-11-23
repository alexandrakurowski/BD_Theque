<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB; 

class AccueilController extends Controller

{
    public function getAllBd()
    	{
    		$bd= DB::select('SELECT * FROM bd');
    		return view('accueil',
    		[
    			'bd'=> $bd,
    		]);
    	}
}

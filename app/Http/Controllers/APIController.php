<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\buyer;
class APIController extends Controller
{
    public function verify(Request $request)
    {
    	$data = buyer::all();

    	if($data['verification_status'==1])
           {
    			  return response()->json(
    			 	[
    			 		'data' => "verification_status: true",
    			 		'message' => "you're verified buyer.",
    			 		'error' => "false"
    			 	]	
    			 );
           }
    }
}

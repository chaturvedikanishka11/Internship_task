<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\buyer;

class BuyerController extends Controller
{
    Public function create()
    {
         return view('buyers.create');
    }

    Public function save(Request $request)
    {

      $data=new buyer;
    	$data->name=$request->name;
    	$data->email=$request->email;
    	$data->mobile=$request->mobile;
    	$data->product=$request->product;
    	$data->product_key=$request->product_key;
    	$data->package_name=$request->package_name;
    	$data->verification_status=$request->verification_status;
    	$data->license_type=$request->license_type;
    	$data->purchase_from=$request->purchase_from;
    	$data->purchase_date=$request->purchase_date;
            
        $created=$data->save();

        // dd($created);

        if ($created) {
        	return redirect('create')->with('message','successfully added');
        }
    }

    Public function view()
    {
    	$data=buyer::all();
    	return view('buyers.list',compact('data'));
    }

    Public function delete( $id)
    {
    	$post=buyer::find($id);
        $deleted=$post->delete();
        if ($deleted) 
        {
            return redirect('view')->with('message','post succesfully deleted');
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
//models
use App\Town;

class TownController extends Controller
{
    //authenticate
    public function __construct()
    {
        $this->middleware('auth');
    }

	//main view
    public function index()
    {            
		$towns = Town::all();	   
        //return view
        return view('towns.index', compact('towns'));	   
    }
	
	//show view
    public function show($id)
    {       
		$towns = Town::where('town_id', $id)->firstOrFail();
		//return
		return view('towns.show', compact('towns'));	
    }
	
	//edit form
    public function edit($id)
    {       
		$towns = Town::where('town_id', $id)->firstOrFail();
		//return
		return view('towns.edit', compact('towns'));
    }
		
    //update function
    public function update(Request $request, $id)
    {
		$towns = Town::where('town_id', $id)->firstOrFail();
		//return
		return view('towns.edit', compact('towns'));
    }

}

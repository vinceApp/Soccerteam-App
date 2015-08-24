<?php

namespace App\Http\Controllers;


use App\Http\Requests\SeasonRequest;
use DB;

class SeasonController extends Controller
{
    
    
    public function getForm(){
        return view('nameteam');
    }
    
    public function postForm(SeasonRequest $request){
        $name = $request->input('name');
        $matches = DB::table('match_detail')->where('team_1',$name)->orderBy('date', 'desc')->get();
        return view('season')->with('matches',$matches);
    }
            
    
    public function show($id_match)
	{
            $players = DB::table('player')->where('id_match', $id_match)->get();;
            return view('matchdetail')->with('players', $players);
	}


}
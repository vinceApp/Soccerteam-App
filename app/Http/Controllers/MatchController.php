<?php

namespace App\Http\Controllers;

use App\Repositories\MatchRepository\MatchRepository;
use App\Http\Requests\MatchRequest;
use DB;

class MatchController extends Controller
{

    public function getForm()
	{
		return view('match');
	}

	public function postForm(MatchRequest $request,MatchRepository $matchRepository )
	{
                $matchRepository->save($request->input('team_1'), $request->input('score_team_1'), $request->input('team_2'), $request->input('score_team_2'),$request->input('date'),$request->input('id_calendar'));
                
                $name = $request->input('team_1');
                $id_team = DB::table('team')->where('name',$name)->orderBy('id_team', 'desc')->pluck('id_team');
                $id_calendar = $request->input('id_calendar');
                $id_match = DB::table('match_detail')->where('team_1',$name)->where('id_calendar',$id_calendar)->orderBy('id_match', 'desc')->pluck('id_match');
                //dd($id_team);
                return view('player')->with('id_team',$id_team)->with('number',1)->with('id_match', $id_match);
		
	}
        

}
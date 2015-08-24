<?php

namespace App\Http\Controllers;

use App\Repositories\PlayerRepository\PlayerRepository;
use App\Http\Requests\PlayerRequest;
use DB;

class PlayerController extends Controller
{
    
    public function getForm()
	{
                $nbplayers = 5;
		return view('player')->with('nbplayers',$nbplayers);
	}

	public function postForm(PlayerRequest $request,PlayerRepository $playerRepository )
	{
               
		$id_team = $request->input('id_team');
                $nbplayers = DB::table('team')->where('id_team',$id_team)->pluck('nbplayers');
                
                $name = DB::table('team')->where('id_team', $id_team)->pluck('name');
                $nbmatches = DB::table('calendar')->where('team',$name)->orderBy('id_calendar', 'desc')->pluck('nbmatches');
                $id_calendar = DB::table('calendar')->where('team',$name)->where('nbmatches',$nbmatches)->orderBy('id_calendar', 'desc')->pluck('id_calendar');
                $id_match=$request->input('id_match');
                $nb_goals_score=DB::table('match_detail')->where('id_match', $id_match)->pluck('score_team_1');
                $nb_goals_conceded=DB::table('match_detail')->where('id_match', $id_match)->pluck('score_team_2');
                //dd($nb_goals_conceded);
                
		$playerRepository->save($request->input('firstname'), $request->input('name'), $request->input('position'), $request->input('id_team'), $request->input('id_match'), $request->input('shots'), $request->input('goals'), $request->input('pass_try'), $request->input('pass_succeeded'),$nb_goals_score,$nb_goals_conceded );
               
                
		$nbplayers_save = count(DB::table('player')->where('id_team',$id_team)->where('id_match', $id_match)->lists('id_player'));
                $nbmatches_save = count(DB::table('match_detail')->where('id_calendar',$id_calendar)->lists('id_match'));
                //dd($nbplayers_save);
                
                 if($nbplayers_save<$nbplayers){
                    return view('player')->with('id_team',$id_team)->with('number',$nbplayers_save+1)->with('id_match',$id_match);
                }  
                else {
                    if($nbmatches_save<$nbmatches)
                    {
                        return view('match')->with('id_calendar',$id_calendar)->with('number', 1);
                    }
                    else
                    {
                        return view('match_ok')->with('nbmatches_save', $nbmatches_save);
                    }
                }
                
                
		
	}
        

}
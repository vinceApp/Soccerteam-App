<?php

namespace App\Http\Controllers;

use DB;
use App\Repositories\TeamRepository\TeamRepository;
use App\Http\Requests\TeamRequest;

class TeamController extends Controller
{

    public function getForm()
	{
		return view('team');
	}

	public function postForm(TeamRequest $request,TeamRepository $teamRepository )
	{
		$teamRepository->save($request->input('name'), $request->input('nbplayers'));
                $name=$request->input('name');
                $nbplayers=$request->input('nbplayers');
                $id_team = DB::table('team')->where('name', $name)->pluck('id_team');
                return view('player')->with('id_team', $id_team)->with('nbplayers', $nbplayers);
		
	}
        

}
<?php

namespace App\Http\Controllers;

use App\Repositories\PlayerRepository\PlayerRepository;
use App\Http\Requests\PlayerRequest;

class PlayerController extends Controller
{
    
    public function getForm()
	{
                $nbplayers = 5;
		return view('player')->with('nbplayers',$nbplayers);
	}

	public function postForm(PlayerRequest $request,PlayerRepository $playerRepository )
	{
		$playerRepository->save($request->input('firstname'), $request->input('name'), $request->input('position'), $request->input('id_team') );
		$playerFirstname = $request->input('firstname');
                
                return view('player_ok')->with('playerFirstname',$playerFirstname);
		
	}
        

}
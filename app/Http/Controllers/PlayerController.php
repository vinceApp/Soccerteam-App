<?php

namespace App\Http\Controllers;

use App\Repositories\PlayerRepository\PlayerRepository;
use App\Http\Requests\PlayerRequest;

class PlayerController extends Controller
{

    public function getForm()
	{
		return view('player');
	}

	public function postForm(PlayerRequest $request,PlayerRepository $playerRepository )
	{
		$playerRepository->save($request->input('firstname'), $request->input('name'));
		$playerFirstname = $request->input('firstname');
                
                return view('player_ok')->with('playerFirstname',$playerFirstname);
		
	}
        

}
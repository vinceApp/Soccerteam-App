<?php

namespace App\Repositories\MatchRepository;

use App\Match;


class MatchRepository implements MatchRepositoryInterface
{

    protected $match;
    
	public function __construct(Match $match)
	{
		$this->match = $match;
	}

	public function save($data1, $data2, $data3, $data4, $data5, $data6)
	{
            
            
                $match = new Match;
		$match->team_1 = $data1;
                $match->score_team_1 = $data2;
                $match->team_2 = $data3;
                $match->score_team_2 = $data4;
                $match->date = $data5;
                $match->id_calendar = $data6;
		$match->save();
		
	}

}
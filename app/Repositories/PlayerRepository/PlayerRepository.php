<?php

namespace App\Repositories\PlayerRepository;

use App\Player;

class PlayerRepository implements PlayerRepositoryInterface
{

    protected $player;
    
	public function __construct(Player $player)
	{
		$this->player = $player;
	}

	public function save($data1, $data2, $data3, $data4, $data5, $data6, $data7, $data8)
	{
            
            
                $player = new Player;
		$player->firstname = $data1;
                $player->name = $data2;
                $player->position = $data3;
                $player->id_team = $data4;
                $player->id_match = $data5;
                $player->shots = $data6;
                $player->goals = $data7;
                $player->assists = $data8;
                $rank = 4;
                $player->rank = $rank;
		$player->save();
		
	}

}
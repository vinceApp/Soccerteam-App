<?php

namespace App\Repositories\PlayerRepository;

use App\Player;
use DB;

class PlayerRepository implements PlayerRepositoryInterface
{

    protected $player;
    
	public function __construct(Player $player)
	{
		$this->player = $player;
	}

	public function save($data1, $data2, $data3, $data4)
	{
            
            
                $player = new Player;
		$player->firstname = $data1;
                $player->name = $data2;
                $player->position = $data3;
                $player->id_team = $data4;
		$player->save();
		
	}

}
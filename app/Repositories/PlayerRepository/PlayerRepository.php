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

	public function save($data1, $data2)
	{
		$player = new Player;
		$player->firstname = $data1;
                $player->name = $data2;
		$player->save();
	}

}
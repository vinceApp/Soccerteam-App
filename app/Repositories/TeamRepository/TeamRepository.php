<?php

namespace App\Repositories\TeamRepository;

use App\Team;

class TeamRepository implements TeamRepositoryInterface
{

    protected $team;

	public function __construct(Team $team)
	{
		$this->team = $team;
	}

	public function save($data1, $data2)
	{
		$team = new Team;
		$team->name = $data1;
                $team->nbplayers = $data2;
		$team->save();
	}

}
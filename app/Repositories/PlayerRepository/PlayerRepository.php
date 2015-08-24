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

	public function save($data1, $data2, $data3, $data4, $data5, $data6, $data7, $data8, $data9, $data10, $data11)
	{
            /*
                $pass_try_max=100;
                $pass_succeeded_max=100;
                $shots_max=15;
                $goals_max=5;
             
             */
                $nb_goals_score=$data10;
                $nb_goals_conceded=$data11;
            
                $player = new Player;
		$player->firstname = $data1;
                $player->name = $data2;
                $player->position = $data3;
                $player->id_team = $data4;
                $player->id_match = $data5;
                $player->shots = $data6;
                $player->goals = $data7;
                $player->pass_try = $data8;
                $player->pass_succeeded = $data9;
                
                if($player->shots==0){
                    $ratio_shots=0;
                }else{
                    $ratio_shots=$player->goals/$player->shots;
                }
                if($player->pass_try==0){
                    $ratio_pass=0;
                }else{
                   $ratio_pass=$player->pass_succeeded/$player->pass_try; 
                }
                
                
                
                
                if($ratio_pass>1){
                    $pass=1;
                }
                if($ratio_shots>1){
                    $shots=1;
                }
                if($nb_goals_score>$nb_goals_conceded){
                    $bonus_win=1.5;
                    $bonus_goal=1;
                    $bonus_defender=1;
                }
                if($nb_goals_score<$nb_goals_conceded){
                    $bonus_win=-1;
                    $bonus_goal=-1;
                    $bonus_defender=-1;
                }
                if($nb_goals_score==$nb_goals_conceded){
                    $bonus_win=0;
                    $bonus_goal=0;
                    $bonus_defender=0;
                }
                if($nb_goals_conceded==0){
                    $bonus_goal=2;
                    $bonus_defender=2;
                }
                
                
               
                if($player->position=="Forward"){
                   $mark = 4 + $bonus_win + (3*$ratio_shots) + $ratio_pass;
                }
                if($player->position=="Midfielder")
                {
                   $mark = 4 + $bonus_win + (2*$ratio_pass) + $ratio_shots; 
                }
                if($player->position=="Defender")
                {
                    $mark = 4 + $bonus_win + $ratio_pass + $ratio_shots + $bonus_defender; 
                }
                if($player->position=="Goalkeeper")
                {
                    $mark= 6 + $bonus_goal;
                }
                
                if($mark>10){
                    $mark=10;
                }
                
                $player->mark = $mark;
		$player->save();
		
	}

}
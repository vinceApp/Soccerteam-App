<?php

namespace App\Repositories\CalendarRepository;

use App\Calendar;


class CalendarRepository implements CalendarRepositoryInterface
{

    protected $calendar;
    
	public function __construct(Calendar $calendar)
	{
		$this->calendar = $calendar;
	}

	public function save($data1, $data2, $data3, $data4, $data5)
	{
            
            
                $calendar = new Calendar;
		$calendar->team_1 = $data1;
                $calendar->score_team_1 = $data2;
                $calendar->team_2 = $data3;
                $calendar->score_team_2  = $data4;
                $calendar->date = $data5;
		$calendar->save();
		
	}

}
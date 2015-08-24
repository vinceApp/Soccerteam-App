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

	public function save($data1, $data2)
	{
            
            
                $calendar = new Calendar;
		$calendar->nbmatches = $data1;
                $calendar->team = $data2;
		$calendar->save();
		
	}

}
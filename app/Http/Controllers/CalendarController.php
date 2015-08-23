<?php

namespace App\Http\Controllers;

use App\Repositories\CalendarRepository\CalendarRepository;
use App\Http\Requests\CalendarRequest;

class CalendarController extends Controller
{

    public function getForm()
	{
		return view('calendar');
	}

	public function postForm(CalendarRequest $request,CalendarRepository $calendarRepository )
	{
		$calendarRepository->save($request->input('team_1'), $request->input('score_team_1'), $request->input('team_2'), $request->input('score_team_2'),$request->input('date'));

                return view('calendar_ok');
		
	}
        

}
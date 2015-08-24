<?php

namespace App\Http\Controllers;

use App\Repositories\CalendarRepository\CalendarRepository;
use App\Http\Requests\CalendarRequest;
use DB;

class CalendarController extends Controller
{

    public function getForm()
	{
		return view('calendar');
	}

	public function postForm(CalendarRequest $request,CalendarRepository $calendarRepository )
	{
		$calendarRepository->save($request->input('nbmatches'), $request->input('team'));
                
                $team=$request->input('team');
                $nbmatches=$request->input('nbmatches');
                $id_calendar = DB::table('calendar')->where('team', $team)->where('nbmatches',$nbmatches)->orderBy('id_calendar', 'desc')->pluck('id_calendar');

                return view('match')->with('id_calendar',$id_calendar)->with('number', 1);
		
	}
        

}
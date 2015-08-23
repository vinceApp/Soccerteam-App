@extends('template')

@section('contenu')

        <div class="row">
                                {!! Form::open(['url' => 'calendar/form']) !!}
       
            
                <div class="panel panel-info">
                    <div class="panel-heading">Enter your match</div>
			<div class="panel-body"> 
                                   
                                    <label for="team_1">Team 1 :  </label>    
                                    <input name="team_1" type="text" class="form-control">
                                    <label for="score_team_1">Goals </label>    
                                    <input name="score_team_1" type="text" class="form-control">
                                    <label for="team_2">Team 2 :  </label>    
                                    <input name="team_2" type="text" class="form-control">
                                    <label for="score_team_2">Goals </label>    
                                    <input name="score_team_2" type="text" class="form-control">
                                    <label for="date">Date (YYYY/MM/DD) :  </label>    
                                    <input name="date" type="text" class="form-control">
                                    
                        </div>
                </div>
            <input type="submit" value="Add !" class="btn btn-primary btn-sm" id="button_player">
        </div>
    	
    
@stop
@extends('template')

@section('contenu')


        <div class="row">
                                {!! Form::open(['url' => 'match/form']) !!}
       
            <div class="col-sm-4">
                <div class="panel panel-info">
                    <div class="panel-heading">Enter your match n°{{$number}}</div>
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
                                    <input name="id_calendar" type="hidden" class="form-control" value="{{$id_calendar}}">
                                    
                        </div>
                </div>
            </div>
            
        </div>
    	<input type="submit" value="Add !" class="btn btn-primary btn-sm" id="button_player">
    
@stop
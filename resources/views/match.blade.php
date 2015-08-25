@extends('template')

@section('contenu')


        <div class="row">
                                {!! Form::open(['url' => 'match/form']) !!}
       
            <div class="col-sm-4">
                <div class="panel panel-info">
                    <div class="panel-heading">Enter your match n°{{$number}}</div>
			<div class="panel-body"> 
                                   
                            <div class="form-group {!! $errors->has('team_1') ? 'has-error' : '' !!}">
                                    <label for="team_1">Team 1 (yours)* :  </label>    
                                    <input name="team_1" type="text" class="form-control">
                                    {!! $errors->first('team_1', '<small class="help-block">:message</small>') !!}
                            </div>
                            <div class="form-group {!! $errors->has('score_team_1') ? 'has-error' : '' !!}">
                                    <label for="score_team_1">Goals* : </label>    
                                    <input name="score_team_1" type="text" class="form-control">
                                    {!! $errors->first('score_team_1', '<small class="help-block">:message</small>') !!}
                            </div>
                            <div class="form-group {!! $errors->has('team_2') ? 'has-error' : '' !!}">
                                    <label for="team_2">Team 2* :  </label>    
                                    <input name="team_2" type="text" class="form-control">
                                    {!! $errors->first('team_2', '<small class="help-block">:message</small>') !!}
                            </div>
                            <div class="form-group {!! $errors->has('score_team_2') ? 'has-error' : '' !!}">
                                    <label for="score_team_2">Goals* :</label>    
                                    <input name="score_team_2" type="text" class="form-control">
                                    {!! $errors->first('score_team_2', '<small class="help-block">:message</small>') !!}
                            </div>
                            <div class="form-group {!! $errors->has('date') ? 'has-error' : '' !!}">
                                    <label for="date">Date (YYYY/MM/DD)* :  </label>    
                                    <input name="date" type="text" class="form-control"> 
                                    {!! $errors->first('date', '<small class="help-block">:message</small>') !!}
                            </div>
                                    <input name="id_calendar" type="hidden" class="form-control" value="{{$id_calendar}}">
                                    
                        </div>
                </div>
            </div>
            
        </div>
    	<input type="submit" value="Add !" class="btn btn-primary btn-sm" id="button_player">
    
@stop
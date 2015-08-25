@extends('template')

@section('contenu')

            <div class="row">
		
			
                                {!! Form::open(['url' => 'player/form']) !!}
       
            <div class="col-sm-3">
                <div class="panel panel-info">
                    <div class="panel-heading">Enter your player n°{{$number}}</div>
			<div class="panel-body"> 
                                   
                            <div class="form-group {!! $errors->has('firstname') ? 'has-error' : '' !!}">
                                    <label for="firstname">Enter his firstname* :  </label>    
                                    <input name="firstname" type="text" class="form-control">
                                    {!! $errors->first('firstname', '<small class="help-block">:message</small>') !!}
                            </div>
                            <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
                                    <label for="name">Enter his name* :  </label>    
                                    <input name="name" type="text" class="form-control">
                                    {!! $errors->first('name', '<small class="help-block">:message</small>') !!}
                            </div>
                                    <label for="position">Player's position* :  </label>
                                    <select name="position" onchange="updated(this)">
                                        <option value="Forward">Forward</option>
                                        <option value="Midfielder">Midfielder</option>
                                        <option value="Defender">Defender</option>
                                        <option value="Goalkeeper">Goalkeeper</option>
                                    </select>
                                    <input name="id_team" type="hidden" class="form-control" value="{{$id_team}}">
                                     <input name="id_match" type="hidden" class="form-control" value="{{$id_match}}">
                            <div class="form-group {!! $errors->has('shots') ? 'has-error' : '' !!}">
                                    <label for="shots">Enter his number of shots* :  </label>    
                                    <input name="shots" type="text" class="form-control">
                                    {!! $errors->first('shots', '<small class="help-block">:message</small>') !!}
                            </div>
                            <div class="form-group {!! $errors->has('goals') ? 'has-error' : '' !!}">
                                    <label for="goals">Enter his number of goals* :  </label>    
                                    <input name="goals" type="text" class="form-control">
                                    {!! $errors->first('goals', '<small class="help-block">:message</small>') !!}
                            </div>
                            <div class="form-group {!! $errors->has('pass_try') ? 'has-error' : '' !!}">
                                    <label for="pass_try">Enter his number of pass try* :  </label>    
                                    <input name="pass_try" type="text" class="form-control">
                                    {!! $errors->first('pass_try', '<small class="help-block">:message</small>') !!}
                            </div>
                            <div class="form-group {!! $errors->has('pass_succeeded') ? 'has-error' : '' !!}">
                                    <label for="pass_succeeded">Enter his number of pass succeeded* :  </label>    
                                    <input name="pass_succeeded" type="text" class="form-control">
                                    {!! $errors->first('pass_succeeded', '<small class="help-block">:message</small>') !!}
                            </div>
                        </div>
                </div>
            </div>
                                    
            
       
       
                                    
		
            </div>
        <input type="submit" value="Add !" class="btn btn-primary btn-sm" id="button_player">	
    
@stop
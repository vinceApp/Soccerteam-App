@extends('template')

@section('contenu')
 
    
	<div class="col-sm-3">
            <div class="panel panel-info">
                <div class="panel-heading">Register your team</div>
                    <div class="panel-body">
                        
                                {!! Form::open(['url' => 'team/form']) !!}

                        <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
                                        <label for="name">Enter your team's name :  </label>    
                                        <input name="name" type="text" id="team" class="form-control">
                                        {!! $errors->first('name', '<small class="help-block">:message</small>') !!}
                        </div>
                        <div class="form-group {!! $errors->has('nbplayers') ? 'has-error' : '' !!}">
                                        <label for="nbplayers">Enter your number of players :  </label>    
                                        <input name="nbplayers" type="text" id="nbplayers" class="form-control">
                                        {!! $errors->first('nbplayers', '<small class="help-block">:message</small>') !!}
                        </div>
                        
                    </div>
            </div>
            <input type="submit" value="Add !" class="btn btn-primary btn-sm" id="button_team">	
	</div>
    
@stop

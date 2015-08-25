@extends('template')

@section('contenu')
 
    
	<div class="col-sm-3">
            <div class="panel panel-info">
                <div class="panel-heading">Display your team's season</div>
                    <div class="panel-body">
                        <div class="form-group team_name">
                                {!! Form::open(['url' => 'season/form']) !!}

                                <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
                                        <label for="name">Enter your team's name* :  </label>    
                                        <input name="name" type="text" id="team" class="form-control">
                                        {!! $errors->first('name', '<small class="help-block">:message</small>') !!}
                                </div>
                                        


                        </div>
                    </div>
            </div>
            <input type="submit" value="Add !" class="btn btn-primary btn-sm" id="button_team">	
	</div>
    
@stop


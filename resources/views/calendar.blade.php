@extends('template')

@section('contenu')

        <div class="row">
                                {!! Form::open(['url' => 'calendar/form']) !!}
       
            <div class="col-sm-4">
                <div class="panel panel-info">
                    <div class="panel-heading">How many matches would you record</div>
			<div class="panel-body"> 
                                   
                                    <label for="nbmatches">Number of matches :  </label>    
                                    <input name="nbmatches" type="text" class="form-control">
                                    <label for="team">Your team's name:  </label>    
                                    <input name="team" type="text" class="form-control">
                                    
                        </div>
                </div>
            </div>
            
        </div>
    	<input type="submit" value="Add !" class="btn btn-primary btn-sm" id="button_player">
    
@stop
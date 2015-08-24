@extends('template')

@section('contenu')

            <div class="row">
		
			
                                {!! Form::open(['url' => 'player/form']) !!}
       
            <div class="col-sm-3">
                <div class="panel panel-info">
                    <div class="panel-heading">Enter your player n°{{$number}}</div>
			<div class="panel-body"> 
                                   
                                    <label for="firstname">Enter his firstname :  </label>    
                                    <input name="firstname" type="text" class="form-control">
                                    <label for="name">Enter his name :  </label>    
                                    <input name="name" type="text" class="form-control">
                                    <label for="position">Player's position :  </label>
                                    <select name="position" onchange="updated(this)">
                                        <option value="Forward">Forward</option>
                                        <option value="Midfielder">Midfielder</option>
                                        <option value="Defender">Defender</option>
                                        <option value="Goalkeeper">Goalkeeper</option>
                                    </select>
                                    <input name="id_team" type="hidden" class="form-control" value="{{$id_team}}">
                                     <input name="id_match" type="hidden" class="form-control" value="{{$id_match}}">
                                    <label for="shots">Enter his number of shots :  </label>    
                                    <input name="shots" type="text" class="form-control">
                                    <label for="goals">Enter his number of goals :  </label>    
                                    <input name="goals" type="text" class="form-control">
                                    <label for="pass_try">Enter his number of pass try :  </label>    
                                    <input name="pass_try" type="text" class="form-control">
                                    <label for="pass_succeeded">Enter his number of pass succeeded :  </label>    
                                    <input name="pass_succeeded" type="text" class="form-control">
                        </div>
                </div>
            </div>
                                    
            
       
       
                                    
		
            </div>
        <input type="submit" value="Add !" class="btn btn-primary btn-sm" id="button_player">	
    
@stop
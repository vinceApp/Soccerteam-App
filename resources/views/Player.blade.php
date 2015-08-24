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
                                    
                        </div>
                </div>
            </div>
                                    
            
       
       
                                    
		
            </div>
        <input type="submit" value="Add !" class="btn btn-primary btn-sm" id="button_player">	
    
@stop
@extends('template')

@section('contenu')
<h1>Votre id_team = {{$id_team}}</h1>
            <div class="row">
		
			
                                {!! Form::open(['url' => 'player/form']) !!}
        @for ($i = 0; $i < $nbplayers; $i++)
            <div class="col-sm-3">
                <div class="panel panel-info">
                    <div class="panel-heading">Enter your player</div>
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
                                    <label for="id_team">Enter your id_team :  </label>    
                                    <input name="id_team" type="text" class="form-control">
                        </div>
                </div>
            </div>
                                    
            
       @endfor
       
                                    
		
            </div>
        <input type="submit" value="Add !" class="btn btn-primary btn-sm" id="button_player">	
    
@stop
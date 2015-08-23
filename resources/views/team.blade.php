@extends('template')

@section('contenu')
 <h1>Enter your team your players</h1>
    <br>
	<div class="col-sm-3">
            <div class="form-group team_name">
                    {!! Form::open(['url' => 'team/form']) !!}
                             
                            <label for="name">Enter your team's name :  </label>    
                            <input name="name" type="text" id="team" class="form-control">
                            <label for="nbplayers">Enter your number of players :  </label>    
                            <input name="nbplayers" type="text" id="nbplayers" class="form-control">
                            <input type="submit" value="Add !" class="btn btn-primary btn-sm" id="button_team">	
                    </form>
            </div>
	</div>
@stop

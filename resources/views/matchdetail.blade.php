@extends('template')

@section('contenu')
<div class="row">
	<div class="col-sm-8">
		<div class="panel panel-info">
			<div class="panel-heading">Your Season</div>
			<div class="panel-body"> 
				@foreach($players as $player)
                                
                                <div class="row">
                                    <div class="col-sm-1">
                                        {{$player->firstname}}
                                    </div>
                                    <div class="col-sm-1">
                                        {{$player->name}}
                                    </div>
                                    <div class="col-sm-1">
                                        {{$player->position}}
                                    </div>
                                    <div class="col-sm-2">
                                        {{$player->ratio_shots}}% shots on goal
                                    </div>
                                    <div class="col-sm-1">
                                        {{$player->goals}} buts
                                    </div>
                                    <div class="col-sm-2">
                                        {{$player->ratio_pass}}% pass succeeded
                                    </div>
                                    <div class="col-sm-1">
                                        {{$player->mark}}/10
                                    </div>
                                </div> 
                                <br>
                               @endforeach
			</div>
		</div>
	</div>
</div>
@stop
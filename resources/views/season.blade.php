@extends('template')

@section('contenu')
<div class="row">
	<div class="col-sm-8">
		<div class="panel panel-info">
			<div class="panel-heading">Your Season</div>
			<div class="panel-body"> 
				@foreach($matches as $match)
                                
                                <div class="row">
                                    <div class="col-sm-3">
                                        {{$match->team_1}}
                                    </div>
                                    <div class="col-sm-1">
                                        {{$match->score_team_1}}
                                    </div>
                                    <div class="col-sm-3">
                                        {{$match->score_team_2}}
                                    </div>
                                    <div class="col-sm-1">
                                        {{$match->team_2}}
                                    </div>
                                    <div class="col-sm-2">
                                        {{$match->date}}
                                    </div>
                                    <div class="col-sm-2">
                                        <a href="/GitHub/Soccerteam-App/public/season/show/{{$match->id_match}}" class="btn btn-primary btn-sm btn_detail">Detail</a>
                                    </div>
                                </div> 
                                <br>
                               @endforeach
			</div>
		</div>
	</div>
</div>
@stop
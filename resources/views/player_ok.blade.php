@extends('template')

@section('contenu')
    <br>
	<div class="col-sm-offset-3 col-sm-6">
		<div class="panel panel-info">
			<div class="panel-heading"></div>
			<div class="panel-body"> 
				Thank you {{ $playerFirstname }}, your firstname was registrated.
			</div>
		</div>
	</div>
@stop
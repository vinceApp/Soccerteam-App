@extends('template')

@section('contenu')
    <br>
	<div class="col-sm-offset-4 col-sm-4">
		<div class="panel panel-info">
			<div class="panel-heading">Enter your name</div>
			<div class="panel-body"> 
                                {!! Form::open(['url' => 'player/form']) !!}
                                    {!! Form::label('firstname', 'Enter your firstname : ') !!}
                                    {!! Form::text('firstname') !!}
                                    <div> {!! Form::label('name', 'Enter your name : ') !!}
                                    {!! Form::text('name') !!}
                                    {!! Form::submit('Send !') !!}
                                {!! Form::close() !!}
                                    </div>
			</div>
		</div>
	</div>
@stop
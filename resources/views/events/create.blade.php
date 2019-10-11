@extends('dashboard.layout')

@section('content')
	<h1>Create an Event</h1>
	{!! Form::open(['action' => 'EventsController@store', 'method' => 'POST']) !!}
		
		<div class="form-group">
			{{Form::label('name', 'Event Name')}}
			{{Form::text('name', '', ['class'=> 'form-control', 'placeholder'=>'Enter event name here'])}}
		</div>
		<div class="form-group">
			{{Form::label('description', 'Event Description')}}
			{{Form::textarea('description', '', ['class'=> 'form-control', 'placeholder'=>'Enter description of the event'])}}
		</div>
		<div class="form-group">
			{{Form::label('length', 'Event Length')}}
			{{Form::text('length', '', ['class'=> 'form-control', 'placeholder'=>'Enter length of the event (1hr 20min)'])}}
		</div>
		<div class="form-group">
			{{Form::label('max_participants', 'Maximum Number of Participants')}}
			{{Form::number('max_participants', '2', ['class'=> 'form-control', 'placeholder'=>'Enter participants required for the event'])}}
		</div>
		<div class="form-group">
			{{Form::label('max_accomp', 'Maximum Number of Accomplices')}}
			{{Form::number('max_accomp', '2', ['class'=> 'form-control', 'placeholder'=>'Enter maximum accomplices allowed for the event'])}}
		</div>
		<div class="form-group">
			{{Form::label('organised_by', 'Organised By')}}
			{{Form::text('organised_by', 'College', ['class'=> 'form-control'])}}
		</div>
		
		{{Form::submit('Create', ['class'=>'btn btn-primary'])}}
	{!! Form::close() !!}
@endsection
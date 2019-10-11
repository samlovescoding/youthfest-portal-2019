@extends('dashboard.layout')

@section('content')
	<h1>Add a College</h1>
	{!! Form::open(['action' => 'CollegesController@store', 'method' => 'POST']) !!}
		
		<div class="form-group">
			{{Form::label('name', 'College Name')}}
			{{Form::text('name', '', ['class'=> 'form-control', 'placeholder'=>'Enter College Name'])}}
		</div>
		<div class="form-group">
			{{Form::label('uuid', 'College Unique ID')}}
			{{Form::text('uuid', '', ['class'=> 'form-control', 'placeholder'=>'Enter College UUID'])}}
		</div>
		
		{{Form::submit('Create', ['class'=>'btn btn-primary'])}}
	{!! Form::close() !!}
@endsection
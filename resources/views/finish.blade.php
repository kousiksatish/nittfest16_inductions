@extends('base')

@section('heading')
	Thank you {{$name}}
@stop

@section('heading-content')
	You have successfully applied for {{$team}}!!!
@stop

@section('content')
	<div class="row center">
	You will receive correspondence soon!!!
	</div>
@stop
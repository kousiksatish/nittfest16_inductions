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
	<br>
	You can register for other teams too... <a href={{action('HomeController@index')}}>Click here</a>
	</div>
@stop
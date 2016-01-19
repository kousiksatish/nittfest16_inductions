@extends('base')

@section('heading')
	NITTFEST'16 Inductions
@stop

@section('heading-content')
	Apply to be part of something awesome!!!
@stop

@section('content')



<div class="row center">
	<a href={{action('HomeController@oc')}} class="btn-large waves-effect waves-light orange">Organising Commitee</a>
</div>

<div class="row center">
	<a href={{action('HomeController@ambience')}}   class="btn-large waves-effect waves-light orange">Ambience</a>
</div>

<div class="row center">
	<a href="" class="btn-large waves-effect waves-light orange">OC</a>
</div>

@stop

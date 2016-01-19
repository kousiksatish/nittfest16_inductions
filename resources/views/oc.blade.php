@extends('base')

@section('heading')
	Ambience
@stop

@section('heading-content')

@stop

@section('content')
	<div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <input name="name" type="text" class="validate" required>
          <label for="name">Name</label>
        </div>
        <div class="input-field col s12">
          <input name="rollno" type="text" class="validate" required>
          <label for="rollno">Roll no</label>
        </div>
        <div class="input-field col s12">
          <input name="dept" type="text" class="validate" required>
          <label for="dept">Department</label>
        </div>
        <div class="input-field col s12">
          <input name="phoneno" type="text" class="validate" required>
          <label for="phoneno">Phone no</label>
        </div>
        <div class="input-field col s12">
          <textarea name="ques1" class="materialize-textarea" required></textarea>
          <label for="ques1">Introduce yourself in brief. What does NITTFEST mean to you?</label>
        </div>
        <div class="input-field col s12">
          <textarea name="ques2" class="materialize-textarea" required></textarea>
          <label for="ques2">What according to you does the OC do?</label>
        </div>
        <div class="input-field col s12">
          <textarea name="ques3" class="materialize-textarea" required></textarea>
          <label for="ques3">What qualities of yours, do you think, are going to be useful for us?</label>
        </div>
        <div class="input-field col s12">
          <textarea name="ques4" class="materialize-textarea" required></textarea>
          <label for="ques4">Your fellow OC member tries to escape whenever he's been assigned with work. How would you react?</label>
        </div>
        <div class="input-field col s12">
          <textarea name="ques5" class="materialize-textarea" required></textarea>
          <label for="ques5">Whom would you approach to procure audio & visual equipments to be used in the Barn Hall?</label>
        </div>
        <div class="input-field col s12">
          <textarea name="ques6" class="materialize-textarea" required></textarea>
          <label for="ques6">You're a part of the disciplinary committee. Ther's a ruffle between your department and another. How would you react? Will you be biased?</label>
        </div>
      </div>
      <div class="input-field col s12">
      <button class="btn-large waves-effect waves-light" type="submit" name="action">Submit
	    <i class="material-icons right">send</i>
	  </button>
	  </div>
    </form>
  </div>
@stop
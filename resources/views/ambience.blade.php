@extends('base')

@section('heading')
	Ambience
@stop

@section('heading-content')
@if(isset($message))
  <font color="red">{{$message}}</font>
@endif
@stop

@section('content')
<script src='https://www.google.com/recaptcha/api.js'></script>
<div class="row">
    <form class="col s12" method="post">
      <div class="row">
        <div class="input-field col s12">
          <input name="name" type="text" class="validate" required>
          <label for="name">Name</label>
        </div>
        <div class="input-field col s12">
          <input name="rollno" type="text" class="validate" pattern=[0-9]{9} required>
          <label for="rollno">Roll no</label>
        </div>
        <div class="input-field col s12">
          <input name="dept" type="text" class="validate" required>
          <label for="dept">Department</label>
        </div>
        <div class="input-field col s12">
          <input name="phoneno" type="text" class="validate" pattern=[0-9]{10} required>
          <label for="phoneno">Phone no</label>
        </div>
        <div class="input-field col s12">
          <select name="preference" required>
            <option value="" disabled selected>Choose your option</option>
            <option value="first">First</option>
            <option value="second">Second</option>
            <option value="third">Third</option>
          </select>
          <label>Preference of this team</label>
        </div>
        <div class="input-field col s12">
          <textarea name="ques1" class="materialize-textarea" required></textarea>
          <label for="ques1">Introduce yourself in brief.</label>
        </div>
        <div class="input-field col s12">
          <textarea name="ques2" class="materialize-textarea" required></textarea>
          <label for="ques2">What do you expect to learn/do by joining the ambience team?</label>
        </div>
        <div class="input-field col s12">
          <textarea name="ques3" class="materialize-textarea" required></textarea>
          <label for="ques3">Under ambience, which team would you prefer out of Painting/art, Installation design, Graphics design, Others. Pick any one.</label>
        </div>
        <div class="input-field col s12">
          <textarea name="ques4" class="materialize-textarea" required></textarea>
          <label for="ques4">You are given a bunch of coloured sheets, glue and a balloon. How would you use all of them creatively for ambience?</label>
        </div>
        <div class="input-field col s12">
          <textarea name="ques5" class="materialize-textarea" required></textarea>
          <label for="ques5">What do you think can be improved in the ambience for fests in NITT?</label>
        </div>
        <div class="input-field col s12">
          <div class="g-recaptcha" data-sitekey="6Lfv4hUTAAAAAOySpPsr2p1WlPBy8zbpxyB4bfjA"></div>
          <label class="control-label col-sm-2"></label>
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
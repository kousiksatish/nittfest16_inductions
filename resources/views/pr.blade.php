@extends('base')

@section('heading')
	Public Relations
@stop

@section('heading-content')
@if(isset($message))
  <font color="red">{{$message}}</font>
@endif
@stop

@section('content')
<script src='https://www.google.com/recaptcha/api.js'></script>
	<div class="row">
<form class="col s12" method="post" action="{{action('HomeController@pr_store')}}" enctype="multipart/form-data">    
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
          <label for="ques1">Give 2 desirable and 2 non-desirable traits of yourself.</label>
        </div>
        <div class="input-field col s12">
          <textarea name="ques2" class="materialize-textarea" required></textarea>
          <label for="ques2">Life gives you lemons, what do you do?</label>
        </div>
        <div class="input-field col s12">
          <textarea name="ques3" class="materialize-textarea" required></textarea>
          <label for="ques3">Why did the Indian cross the road?</label>
        </div>
        <div class="input-field col s12">
          <textarea name="ques4" class="materialize-textarea" required></textarea>
          <label for="ques4">Suggest a # (hashtag) that will uniquely define this years NITTFEST.</label>
        </div>
        <div class="input-field col s12">
          <textarea name="ques5" class="materialize-textarea" required></textarea>
          <label for="ques5">If you were the master of ceremony of The Academy Awards (Oscars) what would your unique name be?  ( no, we don’t want your real name)</label>
        </div>
        <div class="input-field col s12">
          <textarea name="ques6" class="materialize-textarea" required></textarea>
          <label for="ques6">Suggest a new event for NITTFEST 16 with a brief description.</label>
        </div>
        <div class="input-field col s12">
          <textarea name="ques7" class="materialize-textarea" required></textarea>
          <label for="ques7">What do you think are the trends of NIT Trichy?</label>
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
<<<<<<< HEAD
{!! Form::close() !!}

=======
</form>
>>>>>>> 8301465fcf1bbec7657b9a8a34ebba9be3a80d82
  </div>
@stop


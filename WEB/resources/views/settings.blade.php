
<div class="mdl-cell mdl-cell--12-col">
	<form action="#">

	  <div class="mdl-textfield mdl-js-textfield">
	    <input class="mdl-textfield__input" type="text" id="sample1">
	    <label class="mdl-textfield__label" for="sample1">Email</label>
	  </div>
	  <br>
	  <p>To change your password, please fill in the boxes below.</p>
	  <div class="mdl-textfield mdl-js-textfield">
	    <input class="mdl-textfield__input" type="text" id="sample1">
	    <label class="mdl-textfield__label" for="sample1">Password</label>
	  </div>
	  <br>
	   <div class="mdl-textfield mdl-js-textfield">
	    <input class="mdl-textfield__input" type="text" id="sample1">
	    <label class="mdl-textfield__label" for="sample1">Confirm Password</label>

	    <input type="submit" name="" class='mdl-textfield__input'>
	  </div>
	</form>
	</div>
	<br>
	<div class="mdl-cell mdl-cell--12-col">
	<ul>
		@foreach ($mySurveys as $survey)
			@foreach ($survey->users as $user)
				<li>{{ $user->personalInformation->firstName }} {{ $user->personalInformation->lastName }}</li>
			@endforeach
		@endforeach
	</ul>
	</div>


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

	    <input type="submit" name="" class='mdl-textfield__input' id="settingsSubmit">
	  </div>
	</form>
	</div>
	<br>
	<div class="mdl-cell mdl-cell--12-col">
	@if (count($mySurveys) > 0)
		{{ count($mySurveys) }}
	<p>The following people have access to the following surveys.  At any time, you may revoke their access to your personal information.</p>
	<ul>
		@foreach ($mySurveys as $survey)
			@foreach ($survey->users as $user)
				<form action="/revokeAccess" method="post">
					<li>{{ $user->personalInformation->firstName }} {{ $user->personalInformation->lastName }} taken on {{ \Carbon\Carbon::parse($survey->created_at)->toDayDateTimeString() }}  <button type="submit">Revoke Access</button></li>
					{{ csrf_field() }}
					<input type="hidden" name="survey_id" value="{{ $survey->id }}">
					<input type="hidden" name="user_id" value="{{ $user->id }}">
				</form>
			@endforeach
		@endforeach
	</ul>
	@endif
	</div>

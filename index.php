<!doctype HTML>
<html>
<head>

<!-- jQuery -->
<script src="jquery-1.9.1.min.js" type="text/javascript"></script>
<!-- jQuery easing plugin -->
<script src="jquery.easing.min.js" type="text/javascript"></script>

<script src="script.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<title>Multi Step Form</title>
</head>
<body>
<div id="mhead"><h2>Multi Step Form</h2></div>

<!-- multistep form -->
<form id="msform">
	<!-- progressbar -->
	<ul id="progressbar">
		<li class="active">Account Setup</li>
		<li>Social Profiles</li>
		<li>Personal Details</li>
	</ul>
	<!-- fieldsets -->
	<fieldset>
		<h2 class="fs-title">Create your account</h2>
		<h3 class="fs-subtitle">This is step 1</h3>
		<div class="fs-error"></div>
		<input type="text" name="email" id="email" placeholder="Email" />
		<input type="password" name="pass"  id="pass" placeholder="Password" />
		<input type="password" name="cpass"  id="cpass" placeholder="Confirm Password" />
		<input type="button" name="next" class="next action-button" value="Next" />
	</fieldset>
	<fieldset>
		<h2 class="fs-title">Social Profiles</h2>
		<h3 class="fs-subtitle">Your presence on the social network</h3>
		<input type="text" name="twitter" placeholder="Twitter" />
		<input type="text" name="facebook" placeholder="Facebook" />
		<!--<input type="text" name="gplus" placeholder="Google Plus" />-->
		<select name="gplus" id='gplus'>
				<option value="select">Select a Google Plus account</option>
				<option value="100">100$</option>

				<option value="200">200$</option>

				<option value="300">300$</option>

				<option value="400">400$</option>

				<option value="500">500$+</option>
		</select>
		<input type="button" name="previous" class="previous action-button" value="Previous" />
		<input type="button" name="next" class="next action-button" value="Next" />
	</fieldset>
	<fieldset>

		<h2 class="fs-title">Personal Details</h2>
		<h3 class="fs-subtitle">We will never sell it</h3>
			<div class="fs-error"></div>
		<input type="text" name="fname" id="fname" placeholder="First Name" />
		<input type="text" name="lname" id="lname" placeholder="Last Name" />
		<input type="text" name="phone" id="phone" placeholder="Phone" />
		<textarea name="address" id="address" placeholder="Address"></textarea>
		<input type="button" name="previous" class="previous action-button" value="Previous" />
		<input type="submit" name="submit" class="submit action-button" value="Submit" />
			
	</fieldset>
	
</form>

</body>
</html>
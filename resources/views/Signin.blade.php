
<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
	<link rel="stylesheet" href="bootstrap.min.css">
    
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

	<link rel="stylesheet" type="text/css" href="Sign in.css">
</head>
<body class="img js-fullheight" style="background-image:url(img5.jpg)">
	<section class="ftco-section">
	<div class="container">
	<div class="row justify-content-center">
	<div class="col-md-6 text-center mb-5">
	<h2 class="heading-section" style="color: black;"><b><strong>SIGN IN</h2></strong></b>
	</div>
	</div>
	<div class="row justify-content-center">
	<div class="col-md-6 col-lg-4">
	<div class="login-wrap p-0">
	<h3 class="mb-4 text-center" style="color: black;"><strong><b>Already have an account?</h3></b></strong>

	<form action="submit"  method="post"   class="signin-form">
	<div class="form-group">
		<input type="text" class="form-control" onkeyup="validate(this);" name="Username"
		id="Username" placeholder="Username">
	</div>
	<div class="form-group">
		<input type="password" class="form-control" onkeyup="validate(this);" name="Password"
		id="Password" placeholder="Password">
	</div>
	<div class="form-group">
		
	<a href="file:///D:/SEMESTER%205/WEB/WEB%20PROJECT%20DANIA&%20AZKA/index.html" button 
		type="submit" class="form-control btn btn-primary submit px-3">Sign In</button></a>
	</div>
	<div class="form-group d-md-flex">
	<div class="w-50">
	<label class="checkbox-wrap checkbox-primary" style="color:black"><strong><b>Remember Me</strong></b>
	<input type="checkbox" checked>
	<span class="checkmark"></span>
	</label>
	</div>
	<div class="w-50 text-md-right">
	<a href="#" style="color:black"><b>Forgot Password?</b></a>
	</div>
	</div>
	</form>
	
	</div>
	</div>
	</div>
	</div>
	</section>

<!------------------------------------------JAVASCRIPT---------------------------------------------------->
<script>
	const format = {
		Username: /^[a-z0-9]{8,15}$/i,
		Password: /^[a-z0-9@-]{8,20}$/i,
	};
	function validate(singupfrom) {
		var entry = singupfrom.style;
		if (format [singupfrom.name].test(singupfrom.value)) {
			entry['border-color'] = "blue";
			entry['border-width'] = "4px";
			checking();
		}
		else {
			entry['border-color'] = "red";
			entry['border-width'] = "4px";
			checking();
		}
	}


	function checking() {
			if 
			(format["Username"].test(document.getElementById("Username").value) &&
			format["Password"].test(document.getElementById("Password").value) )
			 {
				console.log('done')
				document.getElementById("Submit").disabled = false;
			}
			else {
				document.getElementById("Submit").disabled = true;
			}
		}
	
</script>

	</body>
	</html>
	
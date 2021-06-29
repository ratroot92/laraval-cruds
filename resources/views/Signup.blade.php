<!DOCTYPE html>
<html>
<head>

	<title>Sign Up</title>
	<link rel="stylesheet" href="bootstrap.min.css">
    
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
	
	<link rel="stylesheet" type="text/css" href="Signup.css">
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<b><h2 style="text-align: center;">Sign Up</b></h2>
			</div>
			<div class="card-body">
			
            
				<form action="Signup.php" method="post">>
				
					<div class="input-group form-group" >
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" name="Name" placeholder="Name"
						onkeyup="validate(this);" id="Name" pattern="[a-zA-Z ]*$" onerror="">

						
                    </div>
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-at"></i></span>
						</div>
						<input type="text" class="form-control" name="Username" placeholder="username"
						onkeyup="validate(this);" id="Username">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" name="Password" id="Password"
						onkeyup="validate(this);" placeholder="Password (at least 8 digits)">
                    </div>
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-lock"></i></span>
						</div>
						<input type="password" class="form-control" name="Renterpassword"
								placeholder="Re-Enter password" onkeyup="validate(this);" id="Renterpassword">
					</div>
					<div class="form-group" style="margin-top: 7%;">
					<input type="submit" value="Submit"/>
                    </div>
                    <div class="d-flex justify-content-center links">
                        Already have an account?<a href="file:///D:/SEMESTER%205/WEB/WEB%20PROJECT%20DANIA&%20AZKA/Sign%20in.html">Sign In</a>
                    </div>
				</form>
            </div>
			<div style="margin-left: 30px;margin-bottom: 15px; margin-right: 30px;">
                <div class="d-flex justify-content-center links" style="font-size: small;">
					By creating an account, you agree to D&Amakeupstudio Conditions of Use and Privacy Notice.
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	const format = {
		Name: /^[a-zA-Z\s]+$/,
		Username: /^[a-z0-9]{8,15}$/i,
		Password: /^[a-z0-9@-]{8,20}$/i,
		Renterpassword: /^[a-z0-9@-]{8,20}$/i,
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
			if (format["Name"].test(document.getElementById("Name").value) &&
			format["Username"].test(document.getElementById("Username").value) &&
			format["Password"].test(document.getElementById("Password").value) &&
			format["Renterpassword"].test(document.getElementById("Reenterpassword").value) &&
			    document.getElementById("Password").value == document.getElementById("Renterpassword").value) {
				console.log('done')
				document.getElementById("Submit").disabled = false;
			}
			else {
				document.getElementById("Submit").disabled = true;
			}
		}

		/*function verify() {


$.ajax({
	url: "signnnup.php",
	type: "POST",
	data: {
		Name: document.getElementById('Name').value,
		Username: document.getElementById('Username').value,
		Password: document.getElementById('Password').value,
		Renterpassword: document.getElementById('Renterpassword').value,

	},
	success: function(dataResultt){
		dataResult=JSON.parse(dataResultt);
		console.log(dataResult);
		// console.log(JSON.parse(dataResult));
		if(dataResult=="inUse"){
			alert('Username Already Taken');				
		}
		else if(dataResult=="Error"){
			alert('Unknown Error');					
		}
		else if(dataResult=="Success"){
			window.location.href="Signin.blade.php";
		}
	}
});
*/

		

</script>
</body>
</html>
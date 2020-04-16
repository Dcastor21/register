<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>User Registration | PHP</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<style>
    
    
label{
    color:white;
}

h1{
    color:white;
}

p{
    color:white;
}

.mt-4{
    color:white;
    padding:15px;
    margin-left:350px;
}
.mt-4 a{
    color:white;
    
}
</style>
</head>
<body>

<div>
<form action="register.php" method="post">
	<div class="container h-100">
	    <div class="row">
	        <div class="col-sm-3">
	<h1>registration</h1>
	<p>Fill up the form with correct values.</p>
	<hr class="mb-3">
	<label for="firstname"><b>first name</b></label>
	<input class="form-control" id="firstname" type="text" name="firstname" required>
	
	<label for="lastname"><b>last name</b></label>
	<input class="form-control" id="lastname" type="text" name="lastname" required>
	
	<label for="email"><b>Email Address</b></label>
	<input class="form-control" id="email" type="email" name="email" required>
	
	<label for="phonenumber"><b>Phone number</b></label>
	<input class="form-control" id="phonenumber"type="text" name="phonenumber" required>
	
	<label for="password"><b>password</b></label>
	<input class="form-control" id="password" type="password" name="password" required>
	<hr class="mb-3">
	<input class="btn btn-primary" type="submit" id="register" name="create" value="Sign up">

	</div>
	</div>
	</div>
	<div class="mt-4">
				<div class="d-flex  links">
					Already a member? <a href="http://dcastor-developer.com/projects/login/login.php" class="ml-2">login</a>
				</div>
	</form>
	
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<script type="text/javascript">
	    $(function(){
		$('#register').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){


			var firstname 	= $('#firstname').val();
			var lastname	= $('#lastname').val();
			var email 		= $('#email').val();
			var phonenumber = $('#phonenumber').val();
			var password 	= $('#password').val();
			

				e.preventDefault();	

				$.ajax({
					type: 'POST',
					url: 'process.php',
					data: {firstname: firstname,lastname: lastname,email: email,phonenumber: phonenumber,password: password},
					success: function(data){
					Swal.fire({
								'title': 'Successful',
								'text': data,
								'icon': 'success'
								})
							
					},
					error: function(data){
						Swal.fire({
								'title': 'Errors',
								'text': 'There were errors while saving the data.',
								'icon': 'error'
								})
					}
				});

				
			}else{
				
			}

			



		});		

		
	});
	    
	    
	    
	</script>
	</body>
	</html>
	
	

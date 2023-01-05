<?php
require_once('connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>THE FIRST CASE</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link rel="stylesheet" href="css/bootstrap4-neon-glow.min.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel='stylesheet' href='//cdn.jsdelivr.net/font-hack/2.020/css/hack.min.css'>
    <link rel="stylesheet" href="css/main.css">
	
	<script>
		function passwordValidate() {
			var password = document.getElementById("pwd1").value;
			var confirmPassword = document.getElementById("pwd2").value;
		
			 
			if (password != confirmPassword) {
				alert("Passwords do not match.");
				return false;
			}

			if($recaptcha) {
				 alert("Pleace fill captcha");
				 return false;
			}
			
			return true;
		 }
	 
	</script>
</head>

<body class="imgloaded">
    <div class="glitch">
        <div class="glitch__img glitch__img_register"></div>
        <div class="glitch__img glitch__img_register"></div>
        <div class="glitch__img glitch__img_register"></div>
        <div class="glitch__img glitch__img_register"></div>
        <div class="glitch__img glitch__img_register"></div>
    </div>
    <div class="navbar-dark text-white">
        <div class="container">
            <nav class="navbar px-0 navbar-expand-lg navbar-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a href="index.html" class="pl-md-0 p-3 text-decoration-none text-light">
                            <h3 class="bold"><span class="color_danger">THE FIRST</span><span class="color_white"> CASE</span></h3>
                        </a>
                    </div>
                    <div class="navbar-nav ml-auto">
                        <a href="index.html" class="p-3 text-decoration-none text-light bold">Home</a>
                        <a href="about.html" class="p-3 text-decoration-none text-light bold">About</a>
                        <a href="hackerboard.php" class="p-3 text-decoration-none text-light bold">Hackerboard</a>
                        <a href="login.php" class="p-3 text-decoration-none text-light bold">Login</a>
                        <a href="#" class="p-3 text-decoration-none text-white bold">Register</a>
                    </div>
                </div>
            </nav>

        </div>
    </div>

    <div class="jumbotron bg-transparent mb-0 pt-3 radius-0">
        <div class="container">
			<form method = "POST" action = "RegistrationBackend.php">
				<div class="row">
					<div class="col-xl-10">
						<h1 class="display-1 bold color_white content__title">THE FIRST CASE<span class="vim-caret"></span></h1>
						<p class="text-grey text-spacey hackerFont lead mb-5">
						   
						</p>
						
						
						<div class="row  hackerFont">
							<div class="col-md-6">
							
								<div class="form-group">
								   
									<input type="text" class="form-control" id="reciept_id" placeholder="Username" name = "username">
									<small id="reciept_id_help" class="form-text text-muted"><a target="_blank" href="http://pictinc.org/subevents_register/online/index1.php"></a></small>
								
								</div>
								<div class="form-group">
									<input type="text" class="form-control" id="pwd1" placeholder="enter Password" name = "password1">
								</div>
								<div class="form-group">
									<input type="password" class="form-control" id="pwd2" placeholder="Re-enter Password" name = "password2" >
									<small id="passHelp" class="form-text text-muted">Make sure nobody's behind you</small>
								</div>
								<div class="custom-control custom-checkbox my-4">
									<input type="checkbox" class="custom-control-input" id="solemnly-swear">
									<label class="custom-control-label" for="solemnly-swear">I agreed the terms and conditions.</label>
								</div>
							</div>
						</div>
						
					</div>
				</div>
				<div class="row">
					<div class="col-xl-12">
						<button class="btn btn-outline-light btn-shadow px-3 my-2 ml-0 ml-sm-1 text-left typewriter" type = "submit" name = "Register" onclick = "return passwordValidate()">
								<h4><b>Register</b></h4>
						</button>
						<small id="registerHelp" class="mt-2 form-text text-muted">Already Registered? <a class="color_danger_two" href="login.php">Login here</a></small>
					</div>
				</div>
			</form>
        </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>
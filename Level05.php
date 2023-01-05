<?php
require_once('connection.php');

session_start();

if( $_SESSION['username'] == null){
	
    header('location:index.html');
 }
 
 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Lakshya CTF</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link rel="stylesheet" href="css/bootstrap4-neon-glow.min.css">
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel='stylesheet' href='//cdn.jsdelivr.net/font-hack/2.020/css/hack.min.css'>
    <link rel="stylesheet" href="css/main.css">
	
	<script>
		function checkInput() {
			var name = document.getElementById("name").value;
			 
			if (name == "plz123useme") {
				
				return true;
			}
			else{
				alert("Invalid !!! Try Again...");
				return false;
			}
		 }
	 
	</script>
	<script> 
		function Exit()
		{
			if(confirm("Are you sure to delete the record"))
			{
				window.location.href="addmarks/addmarks4.php";
			}
		}
	</script>
</head>

<body class="imgloaded">
    <div class="glitch">
        <div class="glitch__img"></div>
        <div class="glitch__img"></div>
        <div class="glitch__img"></div>
        <div class="glitch__img"></div>
        <div class="glitch__img"></div>
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
                            <h3 class="bold"><span class="color_danger">LAKSHYA</span><span class="color_white">CTF</span></h3>
                        </a>
                    </div>
                   
                </div>
            </nav>

        </div>
    </div>
<form method = "POST" action = "Level06.php">
    <div class="jumbotron bg-transparent mb-0 pt-3 radius-0">
        <div>
            <div class="row justify-content-center hackerFont">
                <div class="col-xl-9">
                    <h3 class="display-1 bold color_white content__title">LEVEL-05<span class="vim-caret"></span></h3>
                      <br></br>
                    <div class="row hackerFont">
                        <div class="col-md-8">
                          
                            <div class="form-group">
	
							    <label  class="text-white text-spacey hackerFont lead mb-9 "><h3>What is your ..?</h3></label>
						
                                <input type="textarea" class="form-control " id="name" placeholder="Type your Answer">
                                
								 <br></br>
								
								 <button type = "submit"  class="btn btn-outline-light btn-shadow px-3 my-2 ml-0 ml-sm-1 text-left typewriter"   onclick="return checkInput()">
                                 <h4><b>Submit</b></h4>
                                 </button>
							<p class="text-center mt-3 text-light fw-bold">If you want exit the game, Please click <a  onclick='Exit()' class ="text-light fw-bold">Exit</a></p>
								
                            </div>
						   </div>	
                        </div>
                    </div>
                </div>
            </div>
    
        </div>
    </div>
</form>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>
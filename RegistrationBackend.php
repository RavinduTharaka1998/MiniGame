<?php
require_once('connection.php');

if (isset($_POST['Register'])){   
	$username  =  $_POST['username'];
	$password1 =  $_POST['password1'];
	$password2 =  $_POST['password2'];
	
		
		        $query = "SELECT * FROM user WHERE username = '".$_POST["username"]."'";
				$result = mysqli_query($conn,$query);
				$count = mysqli_num_rows($result);
				
				if($count>0){
					
					
					echo "<script> alert('username already exists..');</script>";
					header("location:../signup.php");
				   
				}
				else{
					
						//encript password
						$pass = password_hash($password1, PASSWORD_DEFAULT);
				
						$sql = "INSERT INTO user(username,password) VALUES(?,?)";
			            
						$stmt = mysqli_stmt_init($conn);
						
						if(!mysqli_stmt_prepare($stmt, $sql))
						{
							echo "<script> alert('SQL statement faild!');</script>";
							header("location:register.php");
						}
						else
						{
							mysqli_stmt_bind_param($stmt, "ss", $username, $pass);
							
							mysqli_stmt_execute($stmt);
							
							echo "<script> alert('Record  Added successfully');</script>";
							header("location:login.php");
						}
						
				}
				
}		    
	
?>
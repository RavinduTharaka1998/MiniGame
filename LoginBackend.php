<?php
require_once('connection.php');

session_start();
if (isset($_POST['Login'])){
	
	
          
			$username=$_POST['username'];
			$password=$_POST['password'];
			
			 $_SESSION["status"] = false;
			
			$select_user = "select *from user where username = '$username'";
			
			
			$run_qry = mysqli_query($conn,$select_user);
			if(mysqli_num_rows($run_qry)>0){
				
				while($row = mysqli_fetch_assoc($run_qry)){
					
					if(password_verify($password,$row['password'])){
						 
						 $_SESSION["username"] = $row['username'];
						 $_SESSION["status"] = true;
						 header("location:instructions.php");
					}
					else{
						echo "<script> alert('invalid Login Details');</script>";
						header("location:login.php");
					}
				}
			}else{
				echo "<script> alert('invalid Login Details');</script>";
				header("location:login.php");
			}
  
}
?>
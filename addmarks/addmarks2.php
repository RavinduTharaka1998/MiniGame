<?php
require_once('../connection.php');
session_start();
    
	$username = $_SESSION['username'];
	
						$sql = "INSERT INTO board(username,complete_level,marks) VALUES('$username','L2',10)";
			
						if(mysqli_query($conn,$sql))
							{
								echo "<script> alert('Record  Added successfully');</script>";
								header("location:../instructions.php");
				
							}
						else
							{
								echo "<script> alert('Error : Could not save the data !!!');</script>";
								header("location:../instructions.php");
							}

?>
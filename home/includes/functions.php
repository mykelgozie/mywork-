<?php session_start();?>
<?php
ob_start();
// verification of login
function entrance(){
	global $connection;
	if (isset($_POST['login']))

		{

		  $email 	       =  clean($_POST['email']);
		  $password 	   =  clean($_POST['password']);


				  if (!empty($email)|| !empty($password))
				  {

				  	if (!filter_var($email, FILTER_VALIDATE_EMAIL))


				  	{
		 				$errors = array();
				  		$errors[] = "Invalid Email Format";


				  	} else
				  	{

				  $db_pass 		   =  "SELECT * FROM personnel WHERE email = '$email' AND password = '$password' LIMIT 1";
				  $db_pass_result  =  mysqli_query($connection, $db_pass);  
				  $count_result    =  mysqli_num_rows($db_pass_result);

						  if ($count_result == 1)

						  {

						  $found_staff = mysqli_fetch_array($db_pass_result);

						  $_SESSION['id'] 		   = 	 $found_staff['id'];
						  $_SESSION['firstname']   = 	 $found_staff['firstname'];
						  $_SESSION['lastname']    = 	 $found_staff['lastname'];


						 	 $time        = date("y-m-d H:i:s");
		 					 $login_time  = "UPDATE personnel SET Log_in = '$time' WHERE email ='$email' AND password = '$password '" ;
		 					 $time_query  = mysqli_query($connection, $login_time); 
		 					 
		 					
						    header("location:admin.php");
						    
						  } else

						  {
						  		$errors[] = "Invalid Email or Password";

						  }
				  	} 
				  }	else

				  {
				  	$errors[] = "Email and Password Must be Completed";

				  }
		}
		// display errors 

		if (!empty($errors)){

		foreach ($errors as $error) {

			echo" <div class='alert alert-danger col-xs-12 '>
                     <strong>Warning!</strong> $error
                  </div>";
					
		}


	}


	}
function clean($value){
	global $connection;
	if (get_magic_quotes_gpc()) {
		
		$value = stripslashes($values);
		$value = mysqli_real_escape_string($connection, $value);

	} elseif (!get_magic_quotes_runtime()) {
		
		$value = addslashes($value);
		$value = mysqli_real_escape_string($connection, $value);
	}
	return $value;
}






	function register(){
		global $connection;
		
	if (isset($_POST['register'])){

		if (!empty($_POST['lastname'])|| !empty($_POST['firstname'])|| !empty($_POST['email'])|| !empty($_POST['passwordone'])|| !empty($_POST['passwordtwo'])){

		 $lastname    =   clean($_POST['lastname']);
		 $firstname   =   clean($_POST['firstname']);
		 $email       =   clean($_POST['email']);
		 $passwordone =   clean( $_POST['passwordone']);
		 $passwordtwo =   clean($_POST['passwordtwo']);
		 $time  	  =   date("y-m-d H:i:s");
		
		
		
			if ( $passwordone == $passwordtwo){ 
				 

					

		$sql = "INSERT INTO personnel (firstname, lastname, password, email, log_in) VALUES ('$firstname', '$lastname', '$passwordtwo', '$email', '$time')";
		$result = mysqli_query($connection, $sql);
		if ($result ){

			$messages = array();
			$messages[] = "User added Sucessfully";
			
				
		
		}else {
			
			$messages[] = "Error! CouLdnt Add User!";
			
		}
			}else{
			
			 $messages[] = "Error! Please Confirm Password !";
			}
		} else{ 
		
			
			$messages[] = "Please Complete The Form ";
		}
		
		
		
		
	}

	if (!empty($messages)){

		foreach ($messages as $message) {

			echo" <div class='alert alert-danger col-xs-12 '>
                     <strong>Warning!</strong> $message
                  </div>";
					
		}


	}





	





	}


	function logout(){


		if (isset($_POST['logout'])){
		session_destroy();
		header ('location:index.php');
		exit;
		}

		




	}

	
	
	
?>


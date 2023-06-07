<?php 

session_start();

	include("connection.php");
	include("functions.php");


if($_SERVER['REQUEST_METHOD'] == "POST") {
		//something was posted
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];

	if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result){
				if($result && mysqli_num_rows($result) > 0){

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password){

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "Utilizator sau parolă incorecte!";
			
		} else {
			
			echo "Utilizator sau parolă incorecte!";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Conectare</title>
</head>
<body>
	<link rel="stylesheet" href="form_style.css">

	<div id="box">
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Conectare</div>
			<input id="text" type="text" name="user_name" placeholder="Utilizator"><br>
			<input id="text" type="password" name="password" placeholder="Parolă"><br>
			<input id="button" type="submit" value="Conectare"><br><br><br>
			Nu ai cont? <a href="signup.php">Click aici</a><br><br>
		<a href="reset.php">Am uitat parola... </a>
		</form>
	</div>
</body>
</html>

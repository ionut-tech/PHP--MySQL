<?php 
session_start();

	include("connection.php");
	include("functions.php");

	if($_SERVER['REQUEST_METHOD'] == "POST"){

		if($_POST['password']==$_POST['password2']){
		
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		$avatar_path = 'uploads/'.$_FILES['avatar']['name'];

	} else {
	$_SESSION['message']="Parolele nu corespund!";
}

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password,image_path) values ('$user_id','$user_name','$password', '$image_path')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		} else {

			echo "Te rog să introduci date corecte!";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Înregistrare</title>
</head>
<body>
<link rel="stylesheet" href="form_style.css">	
<div id="box">
		<form method="post">
			<div style="font-size: 20px; margin: 10px; color: white; justify-center">Înregistrare</div>
			<input id="text" type="text" name="user_name" placeholder="Utilizator"><br>
			<input id="text" type="password" name="password" placeholder="Parolă"><br>
			<input id="text" type="password" name="password2" placeholder="Confirmă parolă"><br>
			<input type="file" name="avatar" accept="image/png, image/jpeg, image/jpg"><br>
			<input id="button" type="submit" value="Înregistrare"><br><br><br>
			Dorești să te conectezi? <a href="login.php">Click aici </a><br>
		</form>
	</div>
</body>
</html>
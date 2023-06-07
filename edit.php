<?php 

session_start();

	include("connection.php");
	include("functions.php");

$user_data = check_login($con);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Profilul meu</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
  
	<div class="wrapper">
  <label for = "profileImage"> Editare profil</label>

    <div class="img-area">
      <div class="inner-area">
        <img src="uploads/placeholder.png" alt="">
        <input type = "file" name = "profileImage" onchange = "dislayImage(this)" id = "profileImage" class = "form-control">
      </div>
    </div>
  <br>
    <div class="name">Salut, <?php echo $user_data['user_name']; ?></div>
    <label for="description">Description</label>
    <div class = "form-group">
  <textarea name = "description" id = "description" class = "form-control"></textarea>
  </div>

    <div class="buttons">
      <button><a href="index.php">Salvează</a></button>
      <button><a href="logout.php">Deconectare</a></button>
    </div>
  </div>
</body>
</html>
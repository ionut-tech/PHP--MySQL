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
<?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
	<div class="wrapper">
    <div class="img-area">
      <div class="inner-area">
        <img src="uploads/noprofil.jpg">
      </div>
    </div>
  
    <div class="name">Salut, <?php echo $user_data['user_name']; ?></div>
   Web Dev

    <div class="social-icons">
      <a href="#facebook.com" class="fb"><i class="fa fa-facebook-f"></i></a>
      <a href="#twitter.com" class="twitter"><i class="fa fa-twitter"></i></a>
      <a href="#instagram.com" class="insta"><i class="fa fa-instagram"></i></a>
      <a href="#youtube.com" class="yt"><i class="fa fa-youtube"></i></a>
      <a href="#linkedin.com" class="ln"><i class="fa fa-linkedin"></i></a>
    </div>	

    <div class="buttons">
      <button><a href="edit.php">Editare profil</a></button>
      <button><a href="logout.php">Deconectare</a></button>
    </div>
  </div>
</body>
</html>
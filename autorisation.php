<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Autorisation</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body class="pt-4 bg-light">
	<div class="col-2 mx-auto border bg-white mt-3 p-3">
		
		<img src="images/2.png" class="w-100 my-3 mx-auto">
		<form action="login.php" method="POST">
				<input type="text" name="email" placeholder="Моб. телефон или эл. адрес" class="w-100 p-2 form-control mb-1 bg-light">
				<input type="password" name="password" placeholder="Пароль" class="w-100 p-2 form-control mb-2 bg-light">
				<button class="btn btn-primary" type="submit">Войти</button>
		</form>
		<?php 
			echo '<p class="text-danger mt-4">';
			if($_POST['send_succ']=='false'){
				echo 'НЕПРАВИЛЬНО ВВЕДЕН ЛОГИН ИЛИ ПАРОЛЬ';
			}
		echo "</p>" . $_POST['send_success'];
		 ?>
	</div>
</body>
</html>
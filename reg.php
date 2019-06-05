<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body class="pt-4 bg-light">
	<div class="row">
		<div class="col-3 ml-auto mt-5 pt-5">
			<img src="images/1.png" class="w-100">
		</div>
		<div class="col-3 mr-auto">
			<div class="col-11 mx-auto text-center s mt-4 bg-white border p-4">
				<img src="images/2.png" class="w-75 mx-auto my-3">
				<h5 class="text-black-50">
					Зарегистрируйтесь, чтобы смотреть фото и видео ваших друзей.
				</h5>
				<form action="registration.php" method="POST">
					<input type="text" name="email" placeholder="Моб. телефон или эл. адрес" class="w-100 p-2 form-control mb-1 bg-light">
					<input type="text" name="name" placeholder="Имя и фамилия" class="w-100 p-2 form-control mb-1 bg-light">
					<input type="text" name="nickname" placeholder="Имя пользователя" class="w-100 p-2 form-control mb-1 bg-light">
					<input type="password" name="password" placeholder="Пароль" class="w-100 p-2 form-control mb-2 bg-light">
					<button class="btn btn-primary form-control" type="submit">Регистрация</button>
				</form>
				<p class="text-black-50 mt-4">
					Регистрируясь, вы принимаете наши <span class="font-weight-bold">Условия, Политику использования данных и Политику в отношении файлов cookie.</span>
				</p>
				<?php 
				echo '<p class="text-danger mt-4">';
				if($_POST['send_succ']=='false'){
					echo 'ЛОГИН ИЛИ ПОЧТА УЖЕ ЗАНЯТЫ';
				}
				echo "</p>" . $_POST['send_success'];
				 ?>
			</div>
			<div class="col-11 mx-auto text-center s mt-2 bg-white border">
				<p class="mt-4">
					Есть аккаунт? <a href="autorisation.php">Вход</a>
				</p>
			</div>
		</div>
	</div>
	
</body>
</html>
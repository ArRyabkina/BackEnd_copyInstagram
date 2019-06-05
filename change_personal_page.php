<?php $connect = mysqli_connect('127.0.0.1', 'root', '', 'ann_pn_17');
$query = mysqli_query($connect, 'SELECT id, name, nickname, ava FROM instagram WHERE nickname = "' . $_GET['nickname'] . '"'); 
$res = $query->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<div>
		<form action="change_personal_page1.php" method="POST" enctype="multipart/form-data">
			<?php
				echo '<input type="hidden" name="id" value="' . $res['id'] . '">';
				echo '<input type="text" name="name" value="' . $res['name'] . '" class="w-30">';
				echo '<input type="text" name="nickname" value="' . $res['nickname'] . '">';
				echo '<input type="file" name="img">';
			 ?>
			<button class="btn btn-success">
				Изменить
			</button>
		</form>	
	</div>
</body>
</html>
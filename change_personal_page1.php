
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<?php 
		$connect = mysqli_connect('127.0.0.1', 'root', '', 'ann_pn_17');
		if($_FILES['img']['name']!=NULL){
			move_uploaded_file($_FILES['img']['tmp_name'], 'images/' . $_FILES['img']['name']);
			$query = mysqli_query($connect, 
				"
				UPDATE instagram
				SET name = '" . $_POST['name'] . "', nickname = '" . $_POST['nickname'] . "',  ava = 'images/" . $_FILES['img']['name'] . "'
				WHERE id = " . $_POST['id'] . "
				"
			);
		} else {
			$query = mysqli_query($connect, 
				"
				UPDATE instagram
				SET name = '" . $_POST['name'] . "', nickname = '" . $_POST['nickname'] . "'
				WHERE id = " . $_POST['id'] . "
				"
			);
		}
	?>
	<form action="page.php" method="GET">
 		<input type="hidden" name="nickname" value=<?php echo '"' . $_POST['nickname'] . '"' ?>>
 	</form>

	<script type="text/javascript">
		var form = document.forms[0];
		form.submit();
		console.log(1)
	</script>
</body>
</html>
 
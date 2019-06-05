<?php 
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'ann_pn_17');

	move_uploaded_file($_FILES['image']['tmp_name'], 'images/' . $_FILES['image']['name']);

	$query = mysqli_query($connect, 
		"INSERT INTO insta_lenta (user_id, image, main_text) 
		VALUES (
		'" . $_POST['id'] . "', 
		'images/" . $_FILES['image']['name'] . "', '" . $_POST['text'] . "')"
	);
?>

<form method="GET" action="page.php">
	<input type="hidden" name="nickname" <?php echo 'value="' . $_POST['nickname'] . '"'; ?>>
</form>
<script type="text/javascript">
	var form = document.forms[0];
	form.submit();
</script>
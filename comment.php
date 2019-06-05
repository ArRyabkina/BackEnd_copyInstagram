<?php 
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'ann_pn_17');

	$query = mysqli_query($connect, 
		"INSERT INTO insta_comment (nickname, post_id, main_text) 
		VALUES (
			'" . $_POST['nickname'] . "', 
			'" . $_POST['id_lenta'] . "',
			'" . $_POST['text'] . "'
		)"
	);
?>

<form method="GET" action="page.php">
	<?php echo'<input type="hidden" name="nickname" value=' . $_POST['nickname'] . '>'?>
</form>
<script type="text/javascript">
	var form = document.forms[0];
	form.submit();
</script>
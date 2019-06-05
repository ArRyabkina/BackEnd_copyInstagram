
<?php 
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'ann_pn_17');
	$query = mysqli_query($connect, 
		"
		SELECT * FROM instagram
		WHERE (email = '" . $_POST['email'] . "' OR nickname = '" . $_POST['nickname'] . "') AND password = '" . $_POST['password'] . "'
		");
	$res = $query->fetch_assoc();
?>
<form action="autorisation.php" method="POST">
	<input type="hidden" name="send_succ" value="true" id="form_succ">
</form>
<form action="page.php" method="GET">
	<input type="hidden" name="nickname" <?php echo 'value="' . $res['nickname'] . '"' ?>>
</form>
<?php
	if($res==NULL){
		?>
		<script type="text/javascript">
			var form = document.forms[0];
			var succ = document.getElementById('form_succ');
			succ.value='false';
			form.submit();
		</script>
		<?php 
	} else {
		?>
		<script type="text/javascript">
			var form1 = document.forms[1];
			var form = document.forms[0];
			var succ = document.getElementById('form_succ');
			succ.value='true';
			form.submit();
			form1.submit();
		</script>
		<?php 
	}
 ?>
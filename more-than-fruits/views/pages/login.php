<?php
	require "views/inc/head.php";	
?>
<div>
	<h3>Login</h3>
	<form action="/" method="POST">
		<b><?=$data['error']?></b>
		<input type="text" name="user" placeholder="User Name...">
		<input type="password" name="pw" placeholder="Password...">
		<button type="submit" value="submit">Enter</button>
	</form>
</div>
<?php
	require "views/inc/footer.php";	
?>
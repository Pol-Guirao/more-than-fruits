<?php
	if(!isset($_SESSION['Id_User'])){
		header("Location: ../../");
	}
	require "views/inc/head.php";	
?>
<div>
	<div id="logout"><a href="/views/pages/logout.php">Logout</a></div>
	<h3>Orders</h3>
	<form action="/" method="POST">
		<input type="text" name="search" value="<?=$data['search']?>" placeholder="Search Item...">
		<button type="submit" value="submit">Search</button>
	</form>
	<table>
		<thead>
			<tr>
				<th>
					Date
				</th>
				<th>	
					Provider
				</th>
				<th>
					Country
				</th>
				<th>
					Phone
				</th>
				<th>
					CIF
				</th>
				<th>
					Fruit
				</th>
				<th>
					Kilograms
				</th>
			</tr>
		</thead>
		<tbody>
			<?=$data['orders']?>
		</tbody>
	</table>
</div>
<?php
	require "views/inc/footer.php";	
?>
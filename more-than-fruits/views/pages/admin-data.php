<?php
	if(!isset($_SESSION['Id_User'])){
		header("Location: ../../");
	}
	require "views/inc/head.php";	
?>
<div>
	<div id="logout"><a href="views/pages/logout.php">Logout</a></div>
	<h3>Add Order</h3>
	<h5 id="error"></h5>
	<div>
		<input class="formEntry" type="text" name="provider" placeholder="Provider...">
		<input class="formEntry" type="text" name="country"  placeholder="Country Code...">   
		<input class="formEntry" type="tel" name="phone" maxlength="9" placeholder="Phone...">
		<input class="formEntry" type="text" name="cif" placeholder="Provider ID...">
		<select class="formEntry" name="fruit">
			<?=$data['fruits']?>
		</select>
		<input class="formEntry" type="number" name="kg" placeholder="Kilograms...">
		<button id="newOrder">New Order</button>
	</div>
	<h3>Orders</h3>
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
<br/>
<br/>
<hr class="solid">
<br/>
<div>
	<h3>Add User</h3>
	<h5 id="errorUser"></h5>
	<div>
		<input class="userEntry" type="text" name="user" placeholder="User name...">
		<input class="userEntry" type="text" name="pw" placeholder="Password...">
		<button id="newUser">New User</button>
	</div>
	<h3>Users</h3>
	<table>
		<thead>
			<tr>
				<th>
					User Name
				</th>
				<th>	
					Role
				</th>
				<th>
					Options
				</th>
			</tr>
		</thead>
		<tbody>
			<?=$data['users']?>
		</tbody>
	</table>
</div>
<?php
	require "views/inc/footer.php";	
?>
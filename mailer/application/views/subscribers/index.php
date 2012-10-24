<html>
<head>

<style>
table
{
border-collapse:collapse;
}

table, th, td
{
border: 1px solid black;
}
</style>
</head>
<body>
<form method="post" action="subscribers/subscribe">
<div  class="subscribe">
	<table>
	<tr>
		<td align="left" width="1px">First Name</td> 
		<td align="left" width="1px"><input type="text" name="first_name"></input></td>
	</tr>
	<tr>
		<td>Last Name</td> 
		<td><input type="text" name="last_name"></input></td>
	</tr>
	<tr>
		<td>Email Address</td> 
		<td><input type="text" name="email_address"></input></td>
	</tr>
	<tr>
		<td>Subscribe to</td>
		<td>
		<?php 
			if (count($data) > 0) {
				foreach($data as $row) { ?>
					<input type="checkbox" name="subscription_type[]" value="<?php echo $row['id'];?>"><?php echo $row['name']; ?></input><br/>
		<?php 	} 
			} else {
				echo "No available subscriptions.";
			}
		?>
		</td>
	</tr>
	<tr>
		<td colspan="2" align="center"><input type="submit" name="submit"/></td>
	</tr>
		
	</table>
</div>
</form>
</body>

</html>
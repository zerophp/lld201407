<a href="users.php?action=insert">Insert</a>
<table border=1>
	<tr>
		<th>id</th>
		<th>name</th>
		<th>email</th>
		<th>password</th>
		<th>description</th>
		<th>city</th>
		<th>gender</th>
		<th>pets</th>
		<th>languages</th>
		<th>submit</th>
		<th>photo</th>
		<th>Options</th>
	</tr>
	<?php foreach ($data as $key => $rows):?>		
		<tr>
		<?php 
			$row=explode('|',$rows);
			foreach($row as $value):?>
				<td><?=$value;?></td>
			<?php endforeach; ?>
				<td>
				<a href="users.php?action=update&pos=<?=$key;?>">Update</a> |  
				<a href="users.php?action=delete&pos=<?=$key;?>">Delete</a>
				</td>
		</tr>
	<?php endforeach; ?>		
</table>
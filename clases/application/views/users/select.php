<a href="/users/insert">Insert</a>
<table class="table table-striped">
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
		
			foreach($rows as $value):?>
				<td><?=$value;?></td>
			<?php endforeach; ?>
				<td>
				<a href="/users/update/iduser/<?=$rows['iduser'];?>">Update</a> |  
				<a href="/users/delete/iduser/<?=$rows['iduser'];?>">Delete</a>
				</td>
		</tr>
	<?php endforeach; ?>		
</table>
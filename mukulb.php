<form action="view.php" method="get" >
Search Recoed <input type="text" name="search" />
<input type="submit" name="submit" value="Find Now" />
</form>
<?php
if(isset($_GET['search']))
{
	$search_record=$_GET['search'];
	$query="select * from s_project where s_name='$search_record'";
	$run=mysqli_query($query);
	while($row1=mysqli_fetch_assoc($run))
	{
		$name=$row1['s_name'];
				$college_name=$row1['s_college_name'];
						$branch=$row1['s_branch,'];
								$project_name=$row1['s_project_name'];
										$working_year=$row1['s_working_year'];
												$description=$row1['s_description'];
	?>	
	<table width="400" border="1">
	<tr align="center">
	<td><?php echo 	$college_name;?></td>
		<td><?php echo 	$branch;?></td>
			<td><?php echo 	$project_name;?></td>
				<td><?php echo 	$working_year;?></td>
					<td><?php echo 	$name;?></td>
						<td><?php echo $description;?></td>
		</tr>				
</table>
<?php}}?>
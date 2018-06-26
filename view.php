
<?php
session_start();
if(!isset($_SESSION['registration_no']))
{
	
	echo"your erollment no or password is incorrect";
	header('location:http://localhost/mbpcit/login.php');
}

?>


<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'bpcit');
$q="select * from s_project";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);
?>



<!DOCTYPE html>
<head>
<title>BPC Institute of Technology</title>

<style>


            #page_header {
                height: 60px;
            }
            header#page_header nav ul li{
                list-style: none;
            }
            
            a.navlink{
                text-decoration: none;
                float: left;
                height: 40px;
                line-height: 40px;
                padding: 0 10px;
                margin: 0 5px;
                border-top-left-radius: 8px;
                border-top-right-radius: 8px;
                background-color: #12aa21;
                font-size: 20px;
                color: #ffffff;
                font-family: arial, verdana, sans-serif;
            }
            .float-right{
                float: right !important;
            }
            
            a.navlink:hover{
                background-color: #432234;
            }
            #page_body {
                display: block;
            }
			#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
        </style>
</head>

<body>
</head>
    <body>
        <header id="page_header">
            <nav>
                <ul>
                    <li><a class="navlink" href="view.php">VIEW</a></li>
                    <li><a class="navlink" href="insertform.php">DATA INSERT</a></li>
					<li><a class="navlink" href="application.php">Upload Project</a></li>
                    <li><a class="navlink" href="#">about us</a></li>
                    <li><a class="navlink float-right" href="logout.php">Logout</a></li>
                </ul>
            </nav>
        </header>

<h1 align="center" bgcolor="green">student project description</h1>
<form  align ="center"action="view.php" method="get" >
Search Record <input type="text" name="search" >
<input type="submit" name="submit" value="Find Now" >
</form>
<?php
if(isset($_GET['search']))
{
	$conn=mysqli_connect('localhost','root');
	mysqli_select_db($conn,'bpcit');
	$search_record=$_GET['search'];
	$query="select * from s_project where s_name='$search_record'";
	$run=mysqli_query($conn,$query);
	while($row1=mysqli_fetch_assoc($run))
	{
		$name12=$row1['s_name'];
				$college_name12=$row1['s_college_name'];
						$branch12=$row1['s_branch'];
								$project_name12=$row1['s_project_name'];
										$working_year12=$row1['s_working_year'];
												$description12=$row1['s_description'];
	?>	
	</br>
	</br>
	</br>
	<table id="customers">
	<tr align="center">
<th>NAME </th>
<th>COLLEGE NAME</th>
<th>BRANCH </th>
<th>PROJECT NAME </th>
<th>WORKING YEAR </th>
<th>DESCRIPTION </th>
</tr>
	<tr align="center">
		<td><?php echo 	$name12;?></td>
	<td><?php echo 	$college_name12;?></td>
		<td><?php echo 	$branch12;?></td>
			<td><?php echo 	$project_name12;?></td>
				<td><?php echo 	$working_year12;?></td>
						<td><?php echo $description12;?></td>
		</tr>				
</table>
<?php
}
}
?>
<br><br><br>
<table id="customers" >
<tr>
<th>NAME </th>
<th>COLLEGE NAME</th>
<th>BRANCH </th>
<th>PROJECT NAME </th>
<th>WORKING YEAR </th>
<th>DESCRIPTION </th>
</tr>
<?php
for($i=1;$i<=$num;$i++)
{
	$row=mysqli_fetch_array($result);
?>
<tr>
<td><?php echo $row['s_name'];?> </td>
<td><?php echo $row['s_college_name'];?></td>
<td><?php echo $row['s_branch'];?> </td>
<td><?php echo $row['s_project_name'];?> </td>

<td><?php echo $row['s_working_year'];?> </td>
<td><?php echo $row['s_description'];?> </td>


</tr>
<?php
}
?>
</table>


</body>
</html>
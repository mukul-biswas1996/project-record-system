<?php
session_start();
if(!isset($_SESSION['registration_no']))
{
	
	echo"your erollment no or password is incorrect";
	header('location:http://localhost/mbpcit/login.php');
}

?>
<!DOCTYPE html>
<html>
<head>
<title>BPC Institute of Technology</title>
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}

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
        </style>
    </head>
    <body>
        <header id="page_header">
            <nav>
                <ul>
                    <li><a class="navlink" href="view.php">View</a></li>
                    <li><a class="navlink" href="insertform.php">Data Insert</a></li>
                    <li><a class="navlink" href="application.php">Upload Project</a></li>
					<li><a class="navlink" href="#">about us</a></li>
                    <li><a class="navlink float-right" href="logout.php">Logout</a></li>
                </ul>
            </nav>
        </header>

        



<h1 align="center" bgColor="blue">student project description</h1>
<div>
<form action="insertion.php" method="post" >
<table  width="70%">
<tr>
<th> Name</th>
<td><input type="text" name="name" required /></td>
</tr>
<tr>
<th> College Name</th>
<td><input type="text" name="college_name" required /></td>
</tr>
<tr>
<th> Branch</th>
<td><select name="branch">
<option value='CST'>CST</option>
<option value='ME'>ME</option>
<option value='EE'>EE</option>
<option value='CE'>CE</option>
</select>
</td>
</tr>
<tr>
<th> Project Name</th>
<td><input type="text" name="project_name" required /></td>
</tr>
<th> Working Year</th>
<td><select name="working_year">
<option value='2007'>2007</option>
<option value='2008'>2008</option>
<option value='2009'>2009</option>
<option value='2010'>2010</option>
<option value='2011'>2011</option>
<option value='2012'>2012</option>
<option value='2013'>2013</option>
<option value='2014'>2014</option>
<option value='2015'>2015</option>
<option value='2016'>2016</option>
<option value='2017'>2017</option>
<option value='2018'>2018</option>
</select>
</td>
</tr>
<tr>
<th> Description</th>
<td><input type="text" name="description" required /></td>
</tr>

<tr>
<th> </th>
<td><input type="submit" value="insert"/></td>
</tr>
</table>

</form>
</div>
</body>
</html>
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
<header id="page_header">
            <nav>
                <ul>
                    <li><a class="navlink" href="view.php">VIEW</a></li>
                    <li><a class="navlink" href="insertform.php">DATA INSERT</a></li>
                    <li><a class="navlink" href="#">About Us</a></li>
				    <li><a class="navlink" href="upload.php">Upload File</a></li>
                    <li><a class="navlink float-right" href="logout.php">Logout</a></li>
                </ul>
            </nav>
        </header>

<form action="upload.php" method="post" enctype = "multipart/form-data">
<label >Username</label>
<input type="text" name="username" required /></br>
<label>Chose File</label>
<input type="file" name="myfile"  required /></br>
<input type="submit" value="submit"/>
</form>
</body>
</html>
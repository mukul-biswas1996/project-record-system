
<?php
session_start();
if(!isset($_SESSION['registration_no']))
{
	
	echo"your erollment no or password is incorrect";
	header('location:http://localhost/mbpcit/login.php');
}

?>


<?php
$name=$_POST['name'];
$college_name=$_POST['college_name'];
$branch=$_POST['branch'];
$project_name=$_POST['project_name'];
$working_year=$_POST['working_year'];
$description=$_POST['description'];

$con=mysqli_connect("localhost","root");
mysqli_select_db($con,'bpcit');
$q="INSERT INTO s_project(s_name,s_college_name,s_branch,s_project_name,s_working_year,s_description) values('$name','$college_name','$branch','$project_name','$working_year','$description')";
$status=mysqli_query($con,$q);
mysqli_close($con);
?>



<html>
<head>
<title>insertion</title>
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
        </style>
    </head>
    <body>
        <header id="page_header">
            <nav>
                <ul>
                    <li><a class="navlink" href="view.php">VIEW</a></li>
                    <li><a class="navlink" href="insertform.php">DATA INSERT</a></li>
                    <li><a class="navlink" href="#">About Us</a></li>
				    <li><a class="navlink" href="application.php">Upload File</a></li>
                    <li><a class="navlink float-right" href="logout.php">Logout</a></li>
                </ul>
            </nav>
        </header>


<p><?php

if($status==1) echo "Record Inserted";
else echo "Inssertion Failed";?>
</p>

</body>
</html>
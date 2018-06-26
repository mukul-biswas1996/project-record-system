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
        <title>Navigation Tab</title>
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

        <main>
            <h1>Header</h1>
            <p>This is a paragraph</p>
        </main>

        <footer>
            <p>&copy; 2018 Our Family friend</p>
        </footer>
    </body>
</html>
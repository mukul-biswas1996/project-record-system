<!DOCTYPE html>
<html>
<head>
<title>
INSERTION FORM
</title>
<script>
function f1()
{
var x=document.getElementById("2");
x.style.color="blue";
x.style.font-size=14px;
}
</script>
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
input[type=password], select {
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
</style>
</head>
<body>
<h3 style="color:red">STUDENT LOGIN</h3>
<form  action="validation.php" method="post">
<table>
<tr>
<th > REGISTRATION NO</th> 
<td><input type="text" name="registration_no" /></td>
</tr>
<tr>
<th > PASSWORD</th>
<td><input type="Password" name="Password" /></td>
</tr>
<tr>
<th></th>
<td><input type="Submit" value="login" /></td>
</tr>
</table>
</form>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
<script>
function validation()
{
	alert("do you want registrate");
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

<h1>New Registration on B P C Institute Of Technology </h>
<div>
<form action="registration.php" method="post" onsubmit="validation()">
<table>
<tr>
<th> NAME</th>
<td><input type="text" name="name" required /></td>
</tr>
<tr>
<th> Registration NO</th>
<td><input type="text" name="registration_no" required /></td>
</tr>
<tr>
<th> Email Id</th>
<td><input type="text" name="email_id" required /></td>
</tr>
<tr>
<th> PASSWORD</th>
<td><input type="password" name="password" required /></td>
</tr>
<tr>
<th></th>
<td><input type="submit" value="proceed"/></td>
</tr>
</table>
</form>
</div>
</body>
</html>
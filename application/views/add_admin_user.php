<html>
<head>
	<title>ATS</title>
	    <style type="text/css">
        .abc{
          border: 2px solid;
          position:fixed;
          top:30%;
          left:40%;
          width:250px;
        }
    </style>
</head>
<body>
	<h1 align="center"> Add Admin </h1>
	<div class="abc">
		<form action="add_admin_user" method="post">
			<table>
				<tr>
					<td>First Name: </td>
					<td><input type="text" name="first_name"></br></td>
				</tr>
				<tr>
					<td>Last Name: </td>
					<td><input type="text" name="last_name"></br></td>
				</tr>
				<tr>
					<td>Username: </td>
					<td><input type="text" name="username" required></br></td>
				</tr>
				<tr>
					<td>Email: </td>
					<td><input type="email" name="email" required></br></td>
				</tr>
				<tr>
					<td>Address: </td>
					<td><input type="text" name="address" ></br></td>
				</tr>
				<tr>
					<td>Password: </td>
					<td><input type="password" name="password" required></br></td>
				</tr>
				<tr>
					<td>Phone No: </td>
					<td><input type="text" name="phone_number"></br></td>
				</tr>
				<tr>
					<td><button type="submit" name="submit">Submit</button></td>
				</tr>
			</table>
		</form>
	</div>

</body>
</html>
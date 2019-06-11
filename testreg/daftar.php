<html>
<head>
<title>Pendaftaran</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>
<div id="login-form">
<form method="post" name="pendaftaran" action="proses_daftar.php">
<table align="center" width="40%" border="0">
<tr>
<td colspan=3><center><font size=6>Form Registration</font></center></td>
</tr>
<tr>
<td>Name</td><td>:</td><td><input type="text" name="nama" placeholder="Enter Your Name"></td>
</tr>
<tr>
<td>Email</td><td>:</td><td><input type="text" name="email" placeholder="Enter Your Email"></td>
</tr>
<tr>
<td>Username</td><td>:</td><td><input type="text" name="username" placeholder="Enter Your Username"></td>
</tr>
<tr>
<td>Password</td><td>:</td><td><input type="password" name="password" placeholder="Enter Your Password"></td>
</tr>
<tr>
<td>Confirm</td><td>:</td><td><input type="password" name="confirm" placeholder="Confirm Your Password"></td>
</tr>
<tr>
<td colspan=5><center><button type="submit" name="submit">REGISTER</button></center></td>
</tr>
<tr>
<td colspan =5><center><a href="login.php">LOGIN</a></center></td>
</tr>
</table>
</form>
</div>
</center>
</body>
</html>
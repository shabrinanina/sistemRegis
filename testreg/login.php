<?php
include "koneksi.php";
session_start();
if (isset($_SESSION['username'])){
header ("location:index.php");
}
?>
<html>
<head>
<title>LOGIN</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>
<div id="login-form">
<form method="post" name="login" action="cek_login.php">
<table align="center" width="30%" border="0">
<tr><td colspan="2" align="center"><h1>Form Login</h1></td></tr>
<tr>
<td><input type="text" name="username" placeholder="Your Username" required /></td>
</tr>
<tr>
<td><input type="password" name="password" placeholder="Your Password" required /></td>
</tr>
<tr>
<td><button type="submit" name="submit">LOGIN</button></td>
</tr>
<tr>
<td><a href="daftar.php">Create an account</a></td>
</tr>
</table>
</form>
</div>
</center>
</body>
</html>
<?php
session_start();
include_once 'koneksi.php';

if(!isset($_SESSION['username']))
{
 header("Location: index.php");
}
$res=mysql_query("SELECT * FROM users WHERE id_user=".$_SESSION['username']);
?>

<!DOCTYPE>
<html>
<head>
<title>Welcome></title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div id="header">
 <div id="left">
    <label><img src="logo.png" width="90px" height="50px">Dashboard</label>
    </div>
    <div id="right">
     <div id="content">
         hi' <?php echo $_SESSION['username']; ?>&nbsp;<a href="logout.php?logout">Logout</a>
        </div>
    </div>
</div>
<center><div class="hovergallery"><img src="logo.png" width="500px" height="400px"></div></center>
</body>
</html>
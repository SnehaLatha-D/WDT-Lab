<?php
session_start();
if(isset($_SESSION['visitor_count'])){
$_SESSION['visitor_count']++;
}else{
$_SESSION['visitor_count]=1;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
.footer{
position:fixed;
left:0;
bottom:0;
width:100%;
color:black;
background:#4ae0a5;
text-align:center;
}
</style>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,intial_scale=1.0">
<title>page visitor count</title>
</head>
<body>
<h2 align="center">This  is First PHP Program</h2>
<div class="footer">
<p align="center">&copy;K.Venkatesh--All rights reserved.
<p>Total number of views:<?php echo $_SESSION['visitor_count']?>
</p>
</div>
</body>
</html>
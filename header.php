<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	.navigation {

	}
	.navigation li{
		display: inline-block;
		margin: 3px;
	}
	.navigation a{
		padding: 10px;
		text-decoration: none;
		color: #0066ff;
	}
	</style>
</head>
<body>

<?php  
	include 'session.php';
?>

	<div class="navigation">
		<ul>
			<li>
				<a href="public_page_1.php">Public Page 1</a>
			</li>
			<?php 
				if(checkSession() === 'admin') {
			?>
			<li><a href="private_page_1.php">Private Page 1</a></li>
			<li><a href="private_page_2.php">Private Page 2</a></li>
			<li><a href="logout.php">Logout</a></li>
			
			<?php		
				} else {
			?>
			<li><a href="index.php">Login</a></li>
			
			<?php		
				}
			?>
			<li><a href="mixed_page_1.php">Mixed Page 1</a></li>
		</ul>
	</div>
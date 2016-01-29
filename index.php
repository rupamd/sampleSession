<!DOCTYPE html>
<html>
<head>
	<title>Session Variable Sample</title>
	<style type="text/css">
	form > div {
		margin: 10px 0;
	}
	</style>
</head>
<body>
<?php 
// define variables and set to empty values
$loginMsg = "";

//Form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = $_POST["username"];
	$password = $_POST["password"];

	//Initialize session
	session_start();
	if($username === "admin" && $password === "admin") {
		//Login successful.
		$loginMsg = "Successfully logged in.";
		//Create user session
		
		$_SESSION["user"] = $username;
	} else {
		//Login failed.
		$loginMsg = "Login failed. Please try with correct username and password.";
	}
}

?> 

<h2>Login</h2>
<?php echo "<h3> $loginMsg </h3>"; ?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
	<div>
		<label>Username:<label>
		<input type="text" name="username">
	</div>
	<div>
		<label>Password:<label>
		<input type="password" name="password">
	</div>
	<div>
		<input type="submit" name="submit" value="Submit">
	</div>
</form>


<ul>
	<li><a href="private_page_1.php">Private Page 1 (Login required)</a></li>
	<li><a href="private_page_2.php">Private Page 2 (Login required)</a></li>
	<li><a href="public_page_1.php">Public Page 1 (Login not required)</a></li>
	<li><a href="mixed_page_1.php">Mixed Page 1 (Login partially required)</a></li>
</ul>

</body>
</html>
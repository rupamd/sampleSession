<?php include 'header.php';?>
<?php 
	// remove all session variables
	session_unset(); 

	// destroy the session 
	session_destroy();

	// redirect to login page
	header("Location: index.php");
?>

<?php  include 'footer.php';?>
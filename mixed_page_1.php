<?php include 'header.php';?>
<?php 
	if(checkSession() === 'admin') {
?>
	<div class="action">
		<input type="button" value="Add new" />
	</div>	

<?php  
	}
?>
	<div class="list">
		<ul>
			<li>One item</li>
			<li>One more item</li>
			<li>One more</li>
		</ul>
	</div>
</div>

<?php include 'footer.php';?>
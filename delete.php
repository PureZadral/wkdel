<?php 
		$con = mysqli_connect('MySQL-8.2', 'root','','vkdel');
		$query = mysqli_query($con, "DELETE FROM friends WHERE id= '{$_GET['id']}' ");

		header("Location: index.php");
?>
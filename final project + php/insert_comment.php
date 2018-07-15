<?php
	include 'db.php';

	$comment = $_POST['comment'];
	$price = $_POST['price'];

	$query = "INSERT INTO tb_tocbac_228 VALUES ('My Comment', '" . $comment . "', " . $price . ");";

	if(mysqli_query($connection, $query)){
		header('Location: price_breakdown.php');
	} else{
	    echo "ERROR: Could not able to execute $query. " . mysqli_error($connection);
	}

?>
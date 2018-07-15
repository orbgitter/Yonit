<?php
	include 'db.php';

	$comment = $_POST['comment'];
	$price = $_POST['price'];

	$query = "UPDATE tb_tocbac_228 SET text='" . $comment . "', myprice=" . $price . " WHERE name='My Comment';";

	if(mysqli_query($connection, $query)){
		header('Location: price_breakdown.php');
	} else{
	    echo "ERROR: Could not able to execute $query. " . mysqli_error($connection);
	}

?>
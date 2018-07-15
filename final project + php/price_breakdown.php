<?php
	include 'db.php';

	$query = "SELECT * FROM tb_tocbac_228";
	$result = mysqli_query($connection, $query);
	if(!$result) {
		die("DB query failed");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Price Breakdown</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="includes/css/style.css">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"
  			integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<script src="includes/js/main.js" async></script>
</head>
<body>
	<div>
 		<header>
			<a href="#" class="left_float"><i id="hamburger" class="fa fa-bars fa-2x" aria-hidden="true"></i></a>
			<a href="#" class="left_float"><i class="fa fa-lock" aria-hidden="true"></i></a>
			<a href="cart.html" class="right_float">5 <i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i></a>
			<a href="#" class="right_float"><i class="fa fa-user-circle-o fa-2x" aria-hidden="true"></i></a>
		</header>
		<main>
			<div id="menu" class="collapse_menu">
				<div class="profile_pic"><i id class="fa fa-user-circle-o fa-4x" aria-hidden="true"></i></div>
				<a href="index.html"><i class="fa fa-share-alt" aria-hidden="true"></i> Scan</a>
				<a href="cart.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart</a>
				<a href="history.html"><i class="fa fa-history" aria-hidden="true"></i> History</a>
				<a href="around_you.html"><i class="fa fa-map-marker" aria-hidden="true"></i> Around you</a>
				<a href="#"><i class="fa fa-bar-chart" aria-hidden="true"></i> Statistics</a>
				<a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i> Rate Us!</a>
				<a href="#"><i class="fa fa-cog" aria-hidden="true"></i> Settings</a>
				<a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i> Sign-out</a>
				<div><img id="logo" src="images/logo.png"></div>
			</div>
			<div>
				<h1>Price Breakdown</h1>
			</div>
			<section class="price_br price_br_blue left_float"> Scaned item:</section>			
			<table class="table">
				<thead>
				    <tr>
						<th scope="col">($)</th>				    	
						<th scope="col">Production</th>
						<th scope="col">Profit</th>
						<th scope="col">reputation</th>
						<th scope="col">Total</th>
				    </tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row"></th>
						<td>100</td>
						<td>60</td>
						<td>40</td>
						<td>200</td>
					</tr>
				</tbody>
			</table>
			<section class="price_br price_br_blue left_float"> Average price for this item:</section>
			<table class="table">
				<thead>
				    <tr>
						<th scope="col">($)</th>				    	
						<th scope="col">Production</th>
						<th scope="col">Profit</th>
						<th scope="col">reputation</th>
						<th scope="col">Total</th>
				    </tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row"></th>
						<td>60</td>
						<td>80</td>
						<td>40</td>
						<td>180</td>
					</tr>
				</tbody>
			</table>
			<section class="price_br price_br_blue left_float"> Wisdom of the crowd:</section>
			<section class="price_br left_float">170$</section>
			<h4 class="tocbac_mar">Comments</h4>
			<form action="insert_comment.php" class="tocbac_comm" method="post">
				<div class="form-group">
					<textarea name="comment" class="form-control" aria-label="With textarea" placeholder="Add comment here..."></textarea>
				</div>
				<div class="form-group">
				    <label><input name="price" type="text" class="form-control" pattern="\d*" title="only numbers are allowed" placeholder="Your Price"></label>
				    <button type="submit" class="btn btn-primary">Send</button>
				</div>
			</form>
			<?php
				echo'<section> ';
				while($row = mysqli_fetch_assoc($result)){					
					echo'<article ';
					if($row["name"] == "My Comment"){
						echo'id = "mycom"';
					}
					echo' class="tocbac">
					<a href="#" class="tocbac_pic"><i class="fa fa-user-circle-o fa-2x" aria-hidden="true"></i></a>
					<a href="#">' . $row["name"] . '</a><p ';
					if($row["name"] == "My Comment"){
						echo'id = "mycomtxt"';
					}
					echo' class="tocback_text">' . $row["text"] . '</p><h6>My Price: </h6><h6 ';
					if($row["name"] == "My Comment"){
						echo'id = "mycomprc"';
					}					
					echo'>' . $row["myprice"] . '</h6>';
					if($row["name"] == "My Comment"){
						echo'<a id="edit" href="#">Edit </a><a href="delete_comment.php"> Delete';
					}
					echo'</article>';
				}
				echo"</section>";
			?>
		</main>
	</div>
</body>
</html>
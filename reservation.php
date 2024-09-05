<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>Hotel Reservation</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "css/style.css" />
	</head>
<body>
<?php
    include 'header1.php';
?>
<div class="col-lg-12 text-center bg-light mb-5 rounded mb-3">
            <h1 class="text-warning">BOOK YOUR ROOM</h1>
			<h2 class="text-danger">OUR MISSION IS TO BRING THE HUMAN-TOUCH BACK INTO THE WORLD OF ONLINE TRAVEL.</h2>
</div>
<div class="container-fluid">
<div class="col-md-12">
			<div class = "panel-body">
				<?php
					require_once 'admin/connect.php';
					$query = $conn->query("SELECT * FROM `room` ORDER BY `price` ASC") or die(mysql_error());
					while($fetch = $query->fetch_array()){
				?>
					<div class = "well" style = "height:300px; width:100%;">
						<div style = "float:left;">
							<img src = "photo/<?php echo $fetch['photo']?>" height = "250" width = "350"/>
						</div>
						<div style = "float:left; margin-left:10px;">
							<h2><?php echo $fetch['room_type']?></h2>
							<br>
							<h3>Price: <i class="fa-solid fa-indian-rupee-sign"></i><?php echo $fetch['price'].".00"?></h3>
							<br>
							<br>
							<a href = "add_reserve.php?room_id=<?php echo $fetch['room_id']?>" class = "btn btn-info"><h3><i class="fa-solid fa-bookmark"></i> Reserve</h4></a>
						</div>
					</div>
				<?php
					}
				?>
			</div>
		</div>
	</div>
	<br />
	<br />
</body>
</html>
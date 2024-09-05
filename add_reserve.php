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
    require_once 'header1.php';
?>
<div class="col-lg-12 text-center bg-light mb-5 rounded mb-3">
            <h1 class="text-warning">BOOK YOUR ROOM</h1>
			<h2 class="text-danger">OUR MISSION IS TO BRING THE HUMAN-TOUCH BACK INTO THE WORLD OF ONLINE TRAVEL.</h2>
</div>
<div class="container-fluid">
<div class="col-md-12">
			<div class = "panel-body">
				<br />
				<?php 
					require_once 'admin/connect.php';
					$query = $conn->query("SELECT * FROM `room` WHERE `room_id` = '$_REQUEST[room_id]'") or die(mysql_error());
					$fetch = $query->fetch_array();
				?>
				<div style = "height:300px; width:800px;">
					<div style = "float:left;">
						<img src = "photo/<?php echo $fetch['photo']?>" height = "300px" width = "400px">
					</div>
					<div style = "float:left; margin-left:10px;">
						<h2><?php echo $fetch['room_type']?></h2>
						<br>
						<h3>Price: <i class="fa-solid fa-indian-rupee-sign"></i><?php echo $fetch['price'].".00";?></h3>
					</div>
				</div>
				<br style = "clear:both;" />
				<div class = "well col-md-4">
					<form method = "POST" enctype = "multipart/form-data">
						<h3>
						<div class = "form-group">
							<label>Firstname</label>
							<input type = "text" class = "form-control" name = "firstname" required = "required" />
						</div>
						<div class = "form-group">
							<label>Middlename</label>
							<input type = "text" class = "form-control" name = "middlename" required = "required" />
						</div>
						<div class = "form-group">
							<label>Lastname</label>
							<input type = "text" class = "form-control" name = "lastname" required = "required" />
						</div>
						<div class = "form-group">
							<label>Address</label>
							<input type = "text" class = "form-control" name = "address" required = "required" />
						</div>
						<div class = "form-group">
							<label>Contact No</label>
							<input type = "text" class = "form-control" name = "contactno" required = "required" />
						</div>
						<div class = "form-group">
							<label>Check in</label>
							<input type = "date" class = "form-control" name = "date" required = "required" />
						</div>
						<br />
						<div class = "form-group">
							<button class = "btn btn-info form-control" name = "add_guest"><h2><i class="fa-solid fa-toggle-on"></i> Submit</h2></button>
						</div>
						</h3>
					</form>
				</div>
				<div class = "col-md-4"></div>
				<?php 
				require_once 'add_query_reserve.php'
				?>
			</div>
		</div>
	</div>
</body>	
</html>
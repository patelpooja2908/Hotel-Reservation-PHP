<!DOCTYPE html>
<?php
	require_once 'validate.php';
	require 'name.php';
?>
<html lang = "en">
<head>
		<title>Hotel Reservation</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "../css/style.css" />
		<!--Boostrap Cdn-->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--Font Awesome Cdn-->
    <link href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    <script src="https://kit.fontawesome.com/baf5d89e86.js" crossorigin="anonymous"></script>
	</head>
<body>
<h3>
<nav class="navbar navbar-light bg-dark">
    <div class="container-fluid text-white">
        <a class="navbar-brand text-white"><h1>Hotel Reservation</h1></a>
    <span>
        <i class="fa-solid fa-user"></i>
        Hello,<?php echo $name;?> |
        <i class="fa-solid fa-right-from-bracket"></i>
        <a href="logout.php" class="text-decoration-none text-white">Logout</a>
    </span>
    </div>
</nav>
<br>
<div class="bg-danger sticky-top font-monospace">
<ul class="list-unstyled d-flex justify-content-center">
		<li><a href = "home.php" class="text-decoration-none text-white fw-bold fs-4 px-5"><i class="fa-solid fa-house"></i> Home</a></li> |
		<li><a href = "product/index.php" class="text-decoration-none text-white fw-bold fs-4 px-5"><i class="fa-solid fa-image"></i> Add Photos</a></li> |
		<li><a href = "account.php" class="text-decoration-none text-white fw-bold fs-4 px-5"><i class="fa-solid fa-file-invoice"></i> Account</a></li> |
		<li><a href = "reserve.php" class="text-decoration-none text-white fw-bold fs-4 px-5"><i class="fa-solid fa-ticket"></i> Reserve</a></li> |
		<li><a href = "room.php" class="text-decoration-none text-white fw-bold fs-4 px-5"><i class="fa-solid fa-bed"></i> Rooms</a></li>
	</ul>
</div>
	<div class = "container-fluid">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<div class = "alert alert-info">Transaction / Room / Change Room</div>
				<br />
				<div class = "col-md-4">
					<?php
						$query = $conn->query("SELECT * FROM `room` WHERE `room_id` = '$_REQUEST[room_id]'") or die(mysqli_error());
						$fetch = $query->fetch_array();
					?>
					<form method = "POST" enctype = "multipart/form-data">
						<div class = "form-group">
							<label>Room Type </label>
							<select class = "form-control" required = required name = "room_type">
								<option value = "">Choose an option</option>
								<option value = "Standard" <?php if($fetch['room_type'] == "Standard"){echo "selected";}?>>Standard</option>
								<option value = "Superior" <?php if($fetch['room_type'] == "Superior"){echo "selected";}?>>Superior</option>
								<option value = "Super Deluxe" <?php if($fetch['room_type'] == "Super Deluxe"){echo "selected";}?>>Super Deluxe</option>
								<option value = "Jr. Suite" <?php if($fetch['room_type'] == "Jr. Suite"){echo "selected";}?>>Jr. Suite</option>
								<option value = "Executive Suite" <?php if($fetch['room_type'] == "Executive Suite"){echo "selected";}?>>Executive Suite</option>
							</select>
						</div>
						<div class = "form-group">
							<label>Price </label>
							<input type = "number" min = "0" max = "999999999" value = "<?php echo $fetch['price']?>" class = "form-control" name = "price" />
						</div>
						<div class = "form-group">
							<label>Photo </label>
							<div id = "preview" style = "width:150px; height :150px; border:1px solid #000;">
								<img src = "../photo/<?php echo $fetch['photo']?>" id = "lbl" width = "100%" height = "100%"/>
							</div>
							<input type = "file" required = "required" id = "photo" name = "photo" />
						</div>
						<br />
						<div class = "form-group">
							<button name = "edit_room" class = "btn btn-warning form-control"><i class = "glyphicon glyphicon-edit"></i> Save Changes</button>
						</div>
					</form>
					<?php require_once 'edit_query_room.php'?>
				</div>
			</div>
		</div>
	</div>
</body>
</h3>
</html>
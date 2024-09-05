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
	<div class = "container-fluid ">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<div class = "alert alert-info">Accounts</div>
				<a class = "btn btn-success" href = "add_account.php"><h3><i class = "glyphicon glyphicon-plus"></i><i class="fa-solid fa-user"></i> Create New Account</h3></a>
				<br />
				<br />
				<table id = "table" class = "table table-bordered">
					<thead>
						<tr>
							<th>Name</th>
							<th>Username</th>
							<th>Password</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php  
							$query = $conn->query("SELECT * FROM `admin`") or die(mysqli_error());
							while($fetch = $query->fetch_array()){
						?>
						<tr>
							<td><?php echo $fetch['name']?></td>
							<td><?php echo $fetch['username']?></td>
							<td><?php echo md5($fetch['password'])?></td>
							<td><center><a class = "btn btn-warning" href = "edit_account.php?admin_id=<?php echo $fetch['admin_id']?>"><i class="fa-solid fa-pen-to-square"></i> Edit</a> 
							<a class = "btn btn-danger" onclick = "confirmationDelete(this); return false;" href = "delete_account.php?admin_id=<?php echo $fetch['admin_id']?>"><i class="fa-solid fa-trash"></i> Delete</a></center></td>
						</tr>
						<?php
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
						</h3>
	<br />
	<br />
</body>
</html>
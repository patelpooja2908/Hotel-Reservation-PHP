<!DOCTYPE html>
<?php
	require_once 'validate.php';
	require 'name.php';
?>
<html lang = "eng">
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
</body>	
</html>
<?php
	require_once '../validate.php';
	require '../name.php';
?>
<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Hotel Reservation</title>
	<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css " />
	<link rel = "stylesheet" type = "text/css" href = "css/style.css" />
	</head>
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
		<li><a href = "../home.php" class="text-decoration-none text-white fw-bold fs-4 px-5"><i class="fa-solid fa-house"></i> Home</a></li> |
		<li><a href = "../product/index.php" class="text-decoration-none text-white fw-bold fs-4 px-5"><i class="fa-solid fa-house"></i> Add Photos</a></li> |
		<li><a href = "../account.php" class="text-decoration-none text-white fw-bold fs-4 px-5"><i class="fa-solid fa-file-invoice"></i> Account</a></li> |
		<li><a href = "../reserve.php" class="text-decoration-none text-white fw-bold fs-4 px-5"><i class="fa-solid fa-ticket"></i> Reserve</a></li> |
		<li><a href = "../room.php" class="text-decoration-none text-white fw-bold fs-4 px-5"><i class="fa-solid fa-bed"></i> Rooms</a></li>
	</ul>
</div>
<!--Product Insert Form-->
<div class="container">
    <div class="row">
        <div class="col-md-6 m-auto border border-primary mt-3">
            <form action="insert.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <p class="text-center fw-bold fs-3 text-warning">Photos <Details></Details></p>
                </div>
                <div class="mb-3">
                    <label class="form-label">Photo Name:</label>
                    <input type="text" name="Name" class="form-control" placeholder="Enter Photo Name">
                </div>
                <div class="mb-3">
                    <label class="form-label">Add Photo</label>
                    <input type="file" name="Image" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Select Category</label>
                    <select class="form-select" name="Pages">
                        <option value="Gallery">Gallery</option>
                        <option value="Dine">Dine and Lounge</option>
                    </select>
                </div>
                <button name="submit" class="bg-danger fs-4 fw-bold my-3 form-control text-white">Upload</button>
            </form>
        </div>
    </div>
</div>

<!--fetch the data and put to table-->

<div class="container ">
    <div class="row">
        <div class="col-md-8 m-auto"> 
<table class="table border border-warning table-hover border my-5">
    <thead class="bg-dark text-white fs-5 font-monospace text-center">
        <th>Id</th>
        <th>Name</th>
        <th>Image</th>
        <th>Category</th>
        <th>Delete</th>
    </thead>
<tbody class="text-center">
<?php
include 'config.php';
$Record = mysqli_query($con,"SELECT * FROM `addphoto`");
//fetch data
    while($row = mysqli_fetch_array($Record))
    echo "
    <tr>
        <td>$row[Id]</td>
        <td>$row[Name]</td>
        <td><img src='$row[Image]' height='150px' width='150px'></td>
        <td>$row[Category]</td>
        <td><a href='delete.php? Id=$row[Id]' class = 'btn btn-danger'>Delete</a></td>
    </tr>
    ";
?>
</tbody>
</table>
        </div>
    </div>
</div>
</body>
</html>
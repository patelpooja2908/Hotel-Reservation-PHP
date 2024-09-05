<!DOCTYPE html>
<?php 
require_once "connect.php"
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
<body class="bg-light">
<div class="container-fluid">
        <a class="navbar-brand text-danger pb-2"><h1>Hotel Reservation</h1></a>          
</div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 shadow m-auto bg-white font-monospace p-3 border border-primary mt-3">
                <form method="POST">
				<h2>
                    <div class="mb-3">
                        <p class="text-center fw-bold fs-3 text-warning">Login</p>
                    </div>
                    <div class="mb-3">
					<label>Username</label>
							<input type = "text" name = "username" class = "form-control" required = "required" />
                    </div>
                    <div class="mb-3">
					<label>Password</label>
							<input type = "password" name = "password" class = "form-control" required = "required" />
                    </div>
                    <button name="login" class="bg-danger fs-4 fw-bold my-3 form-control text-white"><i class="fa-solid fa-right-to-bracket"></i> Login</button>
					</h2>
                </form>
            </div>
        </div>
    </div>
					<?php require_once 'login.php'?>
				</div>
			</div>
		</div>
		<div class = "col-md-4"></div>
	</div>
</body>	
</html>
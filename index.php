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
<section class="image-mid-section">
        <div class="image-collage">
            <div class="image-collection">
                <img src="images/1.jpg" class="collage-img" alt="">
                <img src="images/2.jpg" class="collage-img" alt="">
                <img src="images/3.jpg" class="collage-img" alt="">
            </div>
        </div>
</section>
		
</body>
<script>
    const collageImages = [...document.querySelectorAll('.collage-img')]

collageImages.map((item, i) => {
    item.addEventListener('mouseover', () => {
        collageImages.map((image, index) => {
            if(index != i)
            {
                image.style.filter = `blur(10px)`;
                item.style.zIndex = 2;
            }
        })
    })

    item.addEventListener('mouseleave', () => {
        collageImages.map((image, index) => {
            image.style = null;
        })
    })
})
</script>
</html>
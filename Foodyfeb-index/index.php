
<?php
    include('category/header-footer/dbconnecation.php');
    include('category/header-footer/header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive flower website design tutorial</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="category/css/style.css">

</head>
<body>


<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>FOODY FEB</h3>
        <span>food odering sysytem </span>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae laborum ut minus corrupti dolorum dolore assumenda iste voluptate dolorem pariatur.</p>
        <a href="#" class="btn">Book now</a>
    </div>
    
</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span> about </span> us </h1>

    <div class="row">

        <div class="video-container">
            <video src="category/images/food video.mp4" loop autoplay muted></video>
            <h3>foody feb</h3>
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p>Food is any substance consumed to provide nutritional support and energy to an organism. It can be raw, processed or formulated and is consumed orally by animals for growth, health or pleasure. </p>
            <p>Food is any substance consumed to provide nutritional support and energy to an organism. It can be raw, processed or formulated and is consumed orally by animals for growth, health or pleasure. </p>
            <a href="#" class="btn">learn more</a>
        </div>

    </div>

</section>

<!-- about section ends -->

<!--foody categroy start -->

<section class="about" id="about">

    <h1 class="heading"> <span> food</span> category </h1>


</section>

<!--foody categroy end-->


<section class="icons-container">

    <a href="category/pizza.php">
    <div class="icons">
        <img src="" alt="">
        <h3></h3>
    </div>
    </a>

    <a href="category/Bugar.php">
    <div class="icons" >
        <img src="category/images/burger.avif" alt=""> 
        <h3>burger</h3>
    </div>
    </a>

    <a href="category/sandwich.php">
    <div class="icons-1">
        <img src="category/images/sandwish.avif" alt="">
        <h3>sandwish</h3>
    </div>
    </a>

    <a href="category/thali.php">
    <div class="icons">
        <img src="category/images/thali.avif" alt="">
        <h3>thali</h3>
    </div>
    </a>

    <a href="category/fries.php">
    <div class="icons">
        <img src="category/images/fries.avif" alt="">
        <h3>Fries</h3>
    </div>
    </a>

    <a href="category/rolls.php">
    <div class="icons">
        <img src="category/images/Rolls.avif" alt="">
        <h3>Rolls</h3>
    </div>
    </a>

    <a href="category/noodles.php">
    <div class="icons">
        <img src="category/images/Noodles.avif" alt="">
        <h3>Noodles</h3>
    </div>
    </a>

    <a href="category/dosa.php">
    <div class="icons">
        <img src="category/images/dosa.avif" alt="">
        <h3>Dosa</h3>
    </div>
    </a>

    <a href="category/chaat.php">
    <div class="icons">
        <img src="category/images/chaat.avif" alt="">
        <h3>Chhat</h3>
    </div>
    </a>

    <a href="category/shake.php">
    <div class="icons">
        <img src="category/images/shake.avif" alt="">
        <h3>Shake</h3>
    </div>
    </a>
</section>

<!-- icons section ends -->



<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="food"> <span> contact </span> us </h1>

    <div class="row">

        <form action="">
            <input type="text" placeholder="name" class="box">
            <input type="email" placeholder="email" class="box">
            <input type="number" placeholder="number" class="box">
            <textarea name="" class="box" placeholder="message" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="send message" class="btn">
        </form>

        <div class="image">
            <img src="category/images/last 1.jpg" alt="">
        </div>

    </div>

</section>

<!-- contact section ends -->

<?php
    include('category/header-footer/footer.php');
?>
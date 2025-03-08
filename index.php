<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- For including css file -->
    <?php include 'style.php'; ?>

    <!-- Swiper js cdn link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- font-awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <!-- local css file link -->
    <!-- <link rel="stylesheeet" href="./style.css" type="text/css"> -->

    
</head>


<body>

<!-- ****************************************************HEADER SECTION******************************************************************* -->

<!-- header section starts -->
 <section class="header">
    <a href="home.php" class="logo">travel</a>
    <nav class="navbar">
        <a href="home.php">Home</a>
        <a href="about.php">About</a>
        <a href="package.php">Package</a>
        <a href="book.php">Book</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>
 </section>
 <!-- header section ends -->

<!-- *****************************************************HOME SECTION******************************************************************** -->

<!-- Home Section starts -->
<section class="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">


            <div class="swiper-slide slide" style="background: url(images/home-bg-0.png) no-repeat; background-position : center">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>travel around the world</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background: url(images/girl-sitting-on-seaside.png) no-repeat; background-position : center">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>discover the new places</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background: url(images/road&mountains.png) no-repeat; background-position : bottom">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>make the world tour easy</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>

        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>

<!-- Home Section ends -->

<!-- ******************************************************SERVICES SECTION*************************************************************** -->

 <!-- services section starts -->
  <section class="services">

    <h1 class="heading-title">Our Services</h1>

        <div class="box-container">

            <!-- box 1 -->
            <div class="box" >
                <img src="images/adventure-icon.png" alt="">
                <h3>adventure</h3>
            </div>

            <!-- box 2 -->
            <div class="box">
                <img src="images/tour-guide-icon.png" alt="">
                <h3>tour guide</h3>
            </div>

            <!-- box 3 -->
            <div class="box">
                <img src="images/trekking-icon.png" alt="">
                <h3>trekking</h3>
            </div>

            <!-- box 4 -->
            <div class="box">
                <img src="images/campfire-icon.png" alt="">
                <h3>camp fire</h3>
            </div>

            <!-- box 5 -->
            <div class="box">
                <img src="images/offroad-icon.png" alt="">
                <h3>off road</h3>
            </div>

            <!-- box 6 -->
            <div class="box">
                <img src="images/camping-icon.png" alt="">
                <h3>camping</h3>
            </div>

        </div>
  </section>
  <!-- services section ends -->


<!-- ***********************************************************HOME-ABOUT SECTION****************************************************** -->


<!-- Home About Section starts -->
<section class="home-about">
    <div class="image">
        <img src="images/home-bg-1.jpg" alt="">
    </div>

    <div class="content">
        <h3>about us</h3>
        <p>Welcome to travel & tour,<br>
        Our passion is to help you discover the world's most captivating destinations, whether you're seeking adventure, 
        relaxation, or cultural exploration. With a team of dedicated travel experts and a commitment to providing 
        personalized service, we make it our mission to turn your travel dreams into reality. 
        From curated tour packages to bespoke travel experiences, we are here to guide you every step of the way. 
        Embark on your next adventure with us and create memories that will last a lifetime.</p>
           <a href="about.php" class="btn">read more</a>
    </div>
</section>

 <!-- Home About Section ends -->

<!-- *********************************************************HOME PACKAGES SECTION****************************************************** -->

 <!-- Home Packages Section starts -->
<section class="home-packages">
    <h1 class="heading-title">Our Packages</h1>

    <div class="box-container">
          

      <!-- Box 1 -->
        <div class="box">

            <div class="image">
                <img src="images/mountains&pinkflowers.png" alt="">
            </div>

            <div class="content">
                <h3>Beauty of Mountains</h3>
                <p>Experience the serene beauty of snowy mountains, where nature's wonder blankets the peaks.</p>
                   <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <!-- Box 2 -->
        <div class="box">

            <div class="image">
                <img src="images/home-bg-1.jpg" alt="">
            </div>

            <div class="content">
                <h3>Serene Sunset of Beach</h3>
                <p>Unwind with a serene sunset on the beach, where the golden horizon meets the tranquil waves for a perfect escape</p>
                   <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <!-- Box 3 -->
         <div class="box">

            <div class="image">
                <img src="images/home-bg-3.jpg" alt="">
            </div>

            <div class="content">
                <h3>Coldest Iceberg of Antartica</h3>
                <!-- <p>Explore the breathtaking beauty of Antarctica's coldest icebergs, where pristine glaciers and 
                    awe-inspiring landscapes await your discovery.</p> -->
                <p>Discover the breathtaking beauty of Antarctica's coldest icebergs and pristine glaciers.</p>
                   <a href="book.php" class="btn">book now</a>
            </div>
        </div>


    </div>
    <div class="load-more"><a href="package.php" class="btn">Load more</a></div>
</section>

<!-- Home Packages Section ends -->

<!-- **************************************************HOME OFFER SECTION**************************************************************** -->

<!-- Home Offer Section Starts -->
<section class="home-offer">
    <div class="content">
        <h3>Upto 50% off - your dream vacation awaits!</h3>
        <p>Now's the perfect time to book your next adventure with travel & tour! 
           We're offering an incredible 50% discount on select travel packages. Whether you're dreaming of sandy beaches, 
           mountain escapes, or vibrant city tours, we've got you covered. <br>
           Don't miss out on this limited-time offer—plan your getaway now and save big! 
           Hurry, spots are filling up fast!</p>
           <a href="book.php" class="btn">book now</a>
    </div>
</section>







<!-- Home Offer Section ends -->

<!-- ************************************************FOOTER SECTION********************************************************************* -->

<!-- footer section starts -->
 <section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
        <a href="home.php"><i class="fas fa-angle-right"></i>Home</a>
        <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
        <a href="package.php"><i class="fas fa-angle-right"></i>Package</a>
        <a href="book.php"><i class="fas fa-angle-right"></i>Book</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
        <a href="#"><i class="fas fa-angle-right"></i>ask questions</a>
        <a href="#"><i class="fas fa-angle-right"></i>about us</a>
        <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
        <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
        <a href="#"><i class="fas fa-phone"></i>+123-456-7890</a>
        <a href="#"><i class="fas fa-phone"></i>+111-555-6666</a>
        <a href="#"><i class="fas fa-envelope"></i>travelandtour@gmail.com</a>
        <a href="#"><i class="fas fa-map"></i>indore,madhya pradesh, india, 452012</a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"><i class="fab fa-facebook-f"></i>Facebook</a>
            <a href="#"><i class="fab fa-x-twitter"></i>X</a>      <!-- Notice font-awesome tag for new twitter logo -->
            <a href="#"><i class="fab fa-instagram"></i>Instagram</a>
            <a href="#"><i class="fab fa-linkedin"></i>LinkedIn</a>
        </div>

    </div>

    <div class="credit">created by <span>SASH&#129535;<span class="emoji">&#129419;</span></span> | all rights reserved! </div>
 </section>

<!-- footer section ends -->

<!-- ***************************************************SCRIPTS************************************************************************** -->


<!-- Swiper script link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>  

<!-- local script link -->
<script src="./script.js"></script>
</body>
</html>




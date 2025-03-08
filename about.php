<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>

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

 <div class="heading" style="background: url(images/about-bg.jpg) no-repeat">
    <h1>about us</h1>
 </div>

<!-- About section starts -->
 <section class="about">

    <div class="image">
        <img src="images/home-bg-1.jpg" alt="">
    </div>

    <div class="content">
        <h3>why choose us?</h3>
        <p>At Travel & Tour, we specialize in crafting personalized travel experiences that cater to your unique preferences. 
            Our expert team ensures every trip is seamless, from start to finish, so you can focus on enjoying your adventure.</p>

        <p>With exclusive deals, local insights, and 24/7 support, we're committed to making your journey exceptional. 
            Choose us for unforgettable travel, where your satisfaction is always our top priority!</p>


        <div class="icons-container">


            <div class="icons">
                <i class="fas fa-map"></i>
                <span>top destinations</span>
            </div>

            <div class="icons">
                <i class="fas fa-hand-holding-usd"></i>
                <span>affordable prices</span>
            </div>

            <div class="icons">
                <i class="fas fa-headset"></i>
                <span>24/7 guide services</span>
            </div>


        </div>
    </div>
 </section>


<!-- About Section ends -->


<!-- Reviews Section starts -->
<section class="reviews">

    <div class="swiper reviews-slider">

        <div class="swiper-wrapper">

            <!-- Review 1  Female-->
            <div class="swiper-slide slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>This was my first time using Travel&tour, and it exceeded all my expectations. 
                    The personalized itinerary was perfect, and the customer service was outstanding. 
                    Can't wait to plan my next adventure!</p>
                <h3>Kristina David</h3>
                <span>traveller</span>
                <img src="images/review-img-1.jpg" alt="">
            </div>

            <!-- Review 2 Male-->
            <div class="swiper-slide slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>The trip was absolutely amazing! Every detail was taken care of, and the tour guides were 
                    knowledgeable and friendly. I highly appreciate Travel&tour.
                     I'll definitely be booking my next vacation with Travel&tour!</p>
                <h3>john deo</h3>
                <span>Trekker</span>
                <img src="images/review-img-2.jpg" alt="">
            </div>

            <!-- Review 3 Female-->
            <div class=" swiper-slide slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>I had an unforgettable experience thanks to Travel&tour. The accommodations were top-notch, and 
                    the activities were well-chosen to suit my interests. 
                    I highly recommend them to anyone looking to explore new places!</p>
                <h3>Cathedrine Alberto</h3>
                <span>photographer</span>
                <img src="images/review-img-3.jpg" alt="">
            </div>

            <!-- Review 4 Male-->
            <div class="swiper-slide slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>The entire process, from booking to the actual tour, was smooth and professional. 
                    I appreciated the local insights provided by the guides, which made the trip even more special. 
                    Great job, Travel&Tour!</p>
                <h3>Yash Jain</h3>
                <span>Architect</span>
                <img src="images/review-img-4.jpg" alt="">
            </div>

            <!-- Review 5 Female-->
            <div class="swiper-slide slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>A big thank you to Travel&tour for organizing such a fantastic trip. 
                  The personalized touches and the variety of experiences offered made this one of the best vacations
                  I've ever had. Highly recommend!</p>
                <h3>Kim Yang</h3>
                <span>Tourister</span>
                <img src="images/review-img-5.jpg" alt="">
            </div>

            <!-- Review 6 Male-->
            <div class="swiper-slide slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>I've traveled with many companies before, but travel&tour stands out for their attention to detail and the quality of 
                    experiences they offer. From start to finish, everything was seamless and stress-free.</p>
                <h3>Patrick da Saliva</h3>
                <span>Climber</span>
                <img src="images/review-img-6.jpg" alt="">
            </div>


        </div>

        <!-- <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div> -->

    </div>
</section>

<!-- Reviews Section ends -->






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

<!-- Swiper script link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>  

<!-- local script link -->
<script src="./script.js"></script>
</body>
</html>
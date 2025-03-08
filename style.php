<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100&display=swap');


:root{
    --main-color: #8e44ad;
    --black: #222;
    --white: #fff;
    --light-black: #777;
    --light-white: #fff9;
    --dark-bg: rgba(0,0,0,0.7);
    --light-bg: #eee;
    --border: .1rem solid var(--black);
    --box-shadow: 0 .5rem 1rem rgba(0,0,0,0.1);
    --text-shadow: 0 1.5rem 3rem rgba(0,0,0,0.3);
}


*{
    font-family: 'Poppins' , sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    outline: none;
    border: none;
    text-transform: capitalize;
}

html{
    font-size: 62.5%;
    overflow-x: hidden;
}

html::-webkit-scrollbar{
    width: 1rem;
}

html::-webkit-scrollbar-track{
    background-color:var(--white) ;
}

html::-webkit-scrollbar-thumb{
    background-color:var(--main-color) ;
}

section{
    padding: 5rem 10%;
}

a{
    text-decoration: none;
    color: white;
}


/* fadeIn Animation */
@keyframes fadeIn {
    0%{
        transform: scale(0);
        opacity: 0;
    }
}

/* About page's heading class styling */
.heading{
    background-size: cover !important;      /* this made possible to spread image on whole page without writing it in about file*/
    background-position: center !important;
    padding-top: 10rem;
    padding-bottom: 15rem;
    display: flex;
    align-items: center;
    justify-content: center;
}

.heading h1 {
    font-size: 10rem;
    text-transform: uppercase;
    color: var(--white);
    text-shadow: var(--text-shadow);
}






/* button edits universal */
.btn{
    display: inline-block;
    background: var(--black);
    margin-top: 1rem;
    color: var(--white);
    font-size: 1.7rem;
    padding: 1rem 3rem;
    cursor: pointer;
}

.btn:hover{
    background: var(--main-color);
}

/* style of heading of each section universal */
.heading-title{
    text-align: center;
    margin-bottom: 3rem;
    font-size: 6rem;
    text-transform: uppercase;
    color: var(--black);
}

/* Navbar styling */
.header{
    position: sticky;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1000;
    background-color: var(--white);
    display: flex;
    padding-top: 2rem;
    padding-bottom: 2rem;
    box-shadow: var(--box-shadow);
    align-items: center;
    justify-content: space-between;
}

.header .logo{
    font-size: 2.5rem;
    color: var(--black);
}

/* links of navbar */
.header .navbar a{
    font-size: 2rem;
    margin-left: 2rem;
    color: var(--black);

}

.header .navbar a:hover{
    color: var(--main-color);
}

/* hamburger styling */
#menu-btn{
    font-size: 2.5rem;
    cursor: pointer;
    color: var(--black);
    display: none;
}




/* Home Section */
.home{
    padding: 0;
}

.home .slide {
    text-align: center;
    display: flex;
    justify-content: center;
    padding: 2rem;
    align-items: center;
    background-size: cover !important;
    /* background-position: center !important; */
    min-height: 60rem;
}

.home .slide .content{
    width: 85rem;
    display: none;
}

.home .swiper-slide-active .content {
    display: inline-block;
}

.home .slide .content span{
    display: block;
    font-size: 2.2rem;
    color: var(--light-white);
    padding-bottom: 1rem;
    animation: fadeIn .2s linear backwards .2s;
}

.home .slide .content h3{
    font-size: 6vw;
    color: var(--white);
    text-transform: uppercase;
    line-height: 1;
    text-shadow: var(--text-show);
    padding: 1rem 0;
    animation: fadeIn .2s linear backwards .4s;
}

.home .slide .content .btn{
    animation: fadeIn .2s linear backwards .6s;
}

.home .swiper-button-next , .home .swiper-button-prev{
    top: inherit;
    left: inherit;
    bottom: 0;
    right: 0;
    height: 7rem;
    width: 7rem;
    background: transparent;
    color: var(--white);
    /* background: var(--white);
       color: var(--black); */
}

.home .swiper-button-next:hover , .home .swiper-button-prev:hover{
    background: var(--main-color);
    color: var(--white);
}

.home .swiper-button-next::after , .home .swiper-button-prev::after{
    font-size: 2rem;
}

.home .swiper-button-prev{
    right: 7rem;
}






/* Services Section */

.services .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(16rem , 1fr));
    gap: 1.5rem;
}

.services .box-container .box{
    padding: 3rem 2rem;
    text-align: center;
    background: var(--main-color);
    cursor: pointer;
    border-radius: 1rem;
}

.services .box-container .box:hover{
    background: var(--black);
}

.services .box-container .box img{
    height: 12rem;
}

.services .box-container .box h3{
    color: var(--white);
    font-size: 1.7rem;
    padding-top: 1rem;
}



/* Home-About Section */

.home-about{
    display: flex;
    align-items: center;
    flex-wrap: wrap;
}

.home-about .image{
    flex: 1 1 41rem;
}

.home-about .image img{
    width: 100%;
}

.home-about .content{
    flex: 1 1 41rem;
    padding: 3rem;
    background: var(--light-bg);
}

.home-about .content h3{
    font-size: 3rem;
    color: var(--black);
}

.home-about .content p{
    font-size: 1.5rem;
    padding: 1rem 0;
    line-height: 1.68;         /* to maintain box size this lineheight is used */
    color: var(--black);
    text-align: justify;
}


/* Home packages Section */

.home-packages{
    background: var(--light-bg);
}

.home-packages .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
    gap: 2rem;
}

.home-packages .box-container .box{
    border: var(--border);
    box-shadow: var(--box-shadow);
    background:var(--white);
}

.home-packages .box-container .box:hover .image img{
    transform: scale(1.1);
}

.home-packages .box-container .box .image{
    height: 20rem;
    overflow: hidden;
}

.home-packages .box-container .box .image img{
    height: 100%;
    width: 100%;
    object-fit: cover;
    transition: .2s linear;
}

.home-packages .box-container .box .content{
    padding: 2rem;
    text-align: center;
}

.home-packages .box-container .box .content h3{
    font-size: 2.5rem;
    color: var(--black);
}

.home-packages .box-container .box .content p{
    font-size: 1.5rem;
    color: var(--light-black);
    line-height: 2;
    padding: 1rem 0;
}

.home-packages .load-more{
    text-align: center;
    margin-top: 2rem;
}

/* Home Offer Section */

.home-offer{
    text-align: center;
}

.home-offer .content{
    max-width: 80rem;
    margin: 0 auto;
}

.home-offer .content h3{
    font-size: 3.5rem;
    color: var(--black);
    text-transform: uppercase;
}

.home-offer .content p{
    font-size: 1.5rem;
    color: var(--light-black);
    padding: 1rem 0;
    line-height: 2;
}

/* About Page  Styling*/
/* about section  styling*/
.about{
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    gap: 3rem;
}

.about .image{
    flex: 1 1 41rem;
}

.about .image img{
    width: 100%;
}

.about .content{
    flex: 1 1 41rem;
    text-align: center;
}

.about .content h3{
    font-size: 3rem;
    color: var(--black);
}

.about .content p{
    font-size: 1.5rem;
    color: var(--light-black);
    line-height: 2;
    padding: 1rem 0;
    text-align: justify;
}

.about .content .icons-container{
    display: flex;
    margin-top: 2rem;
    flex-wrap: wrap;
    gap: 1.5rem;
    align-items: flex-end;
}

.about .content .icons-container .icons{
    background:  var(--light-bg);
    padding: 2rem;
    flex: 1 1 16rem;
}

.about .content .icons-container .icons i{
    font-size: 4rem;
    margin-bottom: 2rem;
    color: var(--main-color);
}

.about .content .icons-container .icons span{
    font-size: 1.5rem;
    color: var(--light-black);
    display: block;
}

/* Reviews Styling */
.reviews{
    background: var(--light-bg);
}

.reviews .slide{
    padding: 2rem;
    border: var(--border);
    background: var(--white);
    text-align: center;
    box-shadow: var(--box-shadow);
    user-select: none;
}

.reviews .slide .stars{
    padding-bottom: .5rem;
}

.reviews .slide .stars i{
    font-size: 1.7rem;
    color: var(--main-color);
}

.reviews .slide p{
    font-size: 1.5rem;
    line-height: 2;
    color: var(--light-black);
    padding: 1rem 0;
}

.reviews .slide h3{
    font-size: 2rem;
    color: var(--black);
}

.reviews .slide span{
    font-size: 1.5rem;
    color: var(--main-color);
    display: block;
}

.reviews .slide img{
    height: 7rem;
    width: 7rem;
    border-radius: 50%;
    margin-top: 1rem;
}

/* Packages page Styling */
/* Package section styling */
.packages .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
    gap: 2rem;
}

.packages .box-container .box{
    border: var(--border);
    box-shadow: var(--box-shadow);
    background:var(--white);
    display: none;
}

.packages .box-container .box:nth-child(1),             /* this creates feature of displaying rest blocks when you click on load more button */
.packages .box-container .box:nth-child(2),
.packages .box-container .box:nth-child(3)
/*  .packages .box-container .box:nth-child(4), */                                /* can unlock rest 3 as well as per your experience */
/*.packages .box-container .box:nth-child(5),
.packages .box-container .box:nth-child(6){ */{
    display: inline-block;
}

.packages .box-container .box:hover .image img{
    transform: scale(1.1);
}

.packages .box-container .box .image{
    height: 25rem;
    overflow: hidden;
}

.packages .box-container .box .image img{
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: .2s linear;
}

.packages .box-container .box .content{
    padding: 2rem;
    text-align: center;
}

.packages .box-container .box .content h3{
    font-size: 2.5rem;
    color: var(--black);
}

.packages .box-container .box .content p{
    font-size: 1.4rem;
    color: var(--light-black);
    line-height: 2;
    padding: 1rem 0;
}

.packages .load-more{
    text-align: center;
    margin-top: 2rem;
}

/* Book page Styling */
/* booking form styling */
.booking .book-form{
    padding: 2rem;
    background: var(--light-bg);
}

.booking .book-form .flex{
    display: flex;
    flex-wrap: wrap;
    gap: 2rem;
}

.booking .book-form .flex .inputBox{
    flex: 1 1 41rem;
}

.booking .book-form .flex .inputBox input{
    width: 100%;
    padding: 1.2rem 1.4rem;
    font-size: 1.6rem;
    color: var(--light-black);
    text-transform: none;
    margin-top: 1.5rem;
    border: var(--border);
}

.booking .book-form .flex .inputBox input:focus{
    background: var(--black);
    color: var(--white);
}

.booking .book-form .flex .inputBox input:focus::placeholder{
    /* background: var(--black); */
    color: var(--light-white);
}

.booking .book-form .flex .inputBox span{
    font-size: 1.5rem;
    color: var(--light-black);
}

.booking .book-form .btn{
    margin-top: 2rem;
}

/* book_form/status section styling */
.booking-status .load-more{
    text-align: center;
    margin-top: 2rem;
}

.booking-status .heading-title{
    text-align: center;
    margin-bottom: 3rem;
    font-size: 3rem;
    text-transform: uppercase;
    color: var(--black);
}


/* Footer Section Edits */

.footer{
    /* background-color: #232b37; */
    background: url(images/footer-bg.jpg) no-repeat 0 50%;
    background-size: cover;
    background-position: center;
    /* background-attachment: fixed; */
}

.footer .box-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(25rem , 1fr));
    gap: 3rem;
}

.footer .box-container .box h3{
    color: var(--white);
    font-size: 2.5rem;
    padding-bottom: 2rem;
}

.footer .box-container .box a{
    color: var(--white);        /*changed from light white to white */
    font-size: 1.5rem;
    padding-bottom: 1.5rem;
    display: block;
}

.footer .box-container .box a i{
    color: var(--main-color);
    padding-right: .5rem;
    transition: .2s linear;
}

.footer .box-container .box a:hover i{
    padding-right: 2rem;
}

.footer .credit {
    text-align: center;
    padding-top: 3rem;
    margin-top: 3rem;
    border-top: .1rem solid var(--light-white);
    font-size: 2rem;
    color: var(--white);
}

.footer .credit span{
    color: var(--main-color);
}

.footer .credit span .emoji{
    filter: hue-rotate(270deg) saturate(200%) brightness(90%);
}



/* media queries : Made for different screen sizes */


@media(max-width:1200px){
    section{
        padding: 3rem 5%;
    }
}

@media(max-width:991px){
    html{
        font-size: 55%;
    }

    section{
        padding: 3rem 2rem;
    }

    .home .slide .content h3{
        font-size: 10vw;
    }
}

@media(max-width:768px){

    .heading h1{
        font-size: 4rem;
    }

    #menu-btn{
    display: inline-block;
    transition: .2s linear;
    }

    #menu-btn.fa-times{
        transform: rotate(180deg);
    }

    .header .navbar{
        position: absolute;
        top:99%;
        left: 0;
        right: 0;
        background-color: var(--white);
        border-top: var(--border);
        padding: 2rem;
        transition: .2s linear;
        clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
    }

    .header nav.navbar.active{                            
        clip-path: polygon(0 0,100% 0,100% 100%,0 100%);
        
    }

    .header .navbar a{
        display: block;
        margin: 2rem;
        text-align: center;
    }
}

@media(max-width:450px){
    html{
        font-size: 50%;
    }

    .heading-title{
        font-size: 3rem;
    }
}

</style>
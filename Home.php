<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">                                  
    <title>MovieTube</title>
    <link rel="shortcut icon" href="LogoTrans.png">
    <link rel="stylesheet" href="home.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
</head>
<body onload="slider()">
   <div id="main">
    <div class="slider">
<img src="kids-movies-disney-plus-1581448680.jpg" id="sliderimg">
    </div>
    <div class="overlay">
            <div class="header">
                <header>
                <div class="head">
                  <div class="logo">
                    <img src="LogoTrans.png" alt="">
                  </div>
                  <div class="linkss">
                    <li class="lis">
                    <a href="#main" class="a1">Home</a>
                     <a href="#service" class="a2">Services</a>
                     <a href="#team" class="a3">Contact Us</a>
                     <a href="Logout.php" class="a4">Sign Out</a>
                </li>  
                </div>
                </div>
                 </header> 
            </div>
        
    <div class="content">
        <h1>Let's Start With MovieTube</h1>
        <h3>Let's Watch Now</h3>
        <button type="button" ><a href="Movies.php" style="text-decoration:none ;color:white;">Watch Now</a></button>
    </div>
    </div>
   </div> 
   <script>
   var sliderimg=document.getElementById("sliderimg");
   var images =new Array(
    "kids-movies-disney-plus-1581448680.jpg",
    "image2.jpg",
    "image3.jpg",
    "image4.png"
   );
   var len=images.length;
   var i=0;
   function slider(){
    if(i>len-1){
        i=0;
    }
    sliderimg.src=images[i];
    i++;
    setTimeout('slider()',2000);
    }
   </script>
   <div id="service">
    <div class="title">
        <h2>Our Services</h2>
    </div>
    <div class="box" data-aos="fade-right">
        <div class="card">
            <img src="usericon.png" class="menu">
            <h5>Watch everywhere</h5>
            <div class="pra">
                <p> Stream unlimited movies and TV shows on  your phone, tablet, laptop, and TV without paying more.</p>
            <p style="text-align:center;">
                <a class="button" href="#">Read More</a>
            </p>
            </div>
        </div>
        <div class="box" data-aos="fade-right">
            <div class="card">
               <img src="usericon.png" class="user">
                <h5>TVShows</h5>
                <div class="pra">
                    <p>  Watchx on Smart TVs, Playstation, Xbox, 
                        Chromecast, Apple TV, Blu-ray players, and 
                         more.</p>
                <p style="text-align:center;">
                    <a class="button" href="#">Read More</a>
                </p>
                </div>
    
            </div>
    </div>
   </div>
   </div>
   <section id="team">
    <div class="center">
    <h1>Contact US</h1>
</div>
<div class="team-content">
    <div class="box2"  data-aos="fade-right">
        <img src="mennaphoto.jpg" class="img2">
        <h3>Mennatullah Magdy Elnashar </h3>
    
    <div class="icons">
        <a href="#" class="f"><i class="ri-twitter-fill"></i></a>
        <a href="#"><i class="ri-facebook-circle-fill"></i></a>
        <a href="#"><i class="ri-instagram-fill"></i></a>
    </div>
</div>
    <div class="box2" data-aos="fade-right">
        <img src="Esraaphoto.jpg" class="img1">
        <h3>Esraa Mohamed Abd Elhady</h3>
    
    <div class="icons">
        <a href="#" class="f"><i class="ri-twitter-fill"></i></a>
        <a href="#"><i class="ri-facebook-circle-fill"></i></a>
        <a href="#"><i class="ri-instagram-fill"></i></a>
    </div>
</div>
</div>
   </section>
   <footer id="footer">
    <div class="links">
        <a href="#"><img src="facebookicon.png"></a> 
        <div class="img1"> <a href="#"><img src="insta.png"></a></div>
        <a href="#"><img src="twitter.png"></a>
    </div>
    <p>&copy 2022 Copy Right</p>
   </footer>
   <script>
    AOS.init();
   </script>
</body>
</html>
<?php
# Initialize the session
session_start();

# If user is not logged in then redirect him to login page
#if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== TRUE) {
#  echo "<script>" . "window.location.href='./';" . "</script>";
#  exit;
#	}
?>

<!DOCTYPE html>
<html lang="en" class="1html">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tattoo Studio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="v.css">
    <link rel="stylesheet" href="v2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merienda&family=Poppins:wght@700&family=Ubuntu+Condensed&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
</head>
<body>
    <div class="contianer">
      <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

        <div id="home" class="home">
            <div class="nb">
                <div class="logo">
                    
                </div>
                <ul class="menu">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#tattoos">Tattoos</a></li>
                    <li><a href="#images">Images</a></li>
                    <li><a href="#vid-cont">Videos</a></li>
                    <li><a href="#artist">Artist</a></li>
                    <li><a href="#contact">Contact us</a></li>
			<li><a href="./login.php">Log In</a></li>
                </ul>
                <div class="menu-btn">
                  <img src="./images/pen.png" alt=""> 
                </div>
            </div>
            
	<div class="col">
                
                <div class="">
                   <h1 style="font-size:500%;color:yellow">It's always a good day for a new TATTOO</h1>
                </div>
            </div>
            
            
        </div>
        <!-- real products  -->
        <div class="tattoos" id="tattoos">
          <div class="row-1">
             <div class="row-txt">
                 the tattoo services we provide and many more....
              </div>
            <div class="box-cont">
              <div class="boxes">
                <img src="./images/3dt.jpg" alt="3d-timg">
                <div class="box-txt">3D </div>
              </div>
              <div class="boxes">
                <img src="./images/arm band.jpg" alt="3d-timg">
                <div class="box-txt">Round Arm</div>
              </div>
              <div class="boxes">
                <img src="./images/geo.jpg" alt="3d-timg">
                <div class="box-txt">Geometric</div>
              </div>
              <div class="next">
                <a href="#row-2" class="box-txt">>></a>
              </div>
              <!-- <div class="boxes">
                <div class="box-txt">ca-4</div>
              </div> -->
            </div>
          </div>
          <div class="row-2" id="row-2">
            <div class="row-txt">
               Take ink into crave
             </div>
           <div class="box-cont">
             <div class="boxes">
               <img src="./images/p.jpg" alt="3d-timg">
               <div class="box-txt">Piercing</div>
             </div>
             <div class="boxes">
               <img src="./images/potarait.jpg" alt="3d-timg">
               <div class="box-txt">potaraits</div>
             </div>
             <div class="con-box">
              <img id="con-img"src="./images/con-removebg-preview.png" alt="3d-timg">
               <p class="con-txt">Confused with
                so many options
                to choose from...
                let us help you at affordable prices...</p>
                
               <!-- <div class="box-txt">ca-3</div> -->
             </div>
             <!-- <div class="boxes">
               <div class="box-txt">ca-4</div>
             </div> -->
           </div>
         </div>
        </div>
        <!-- ----------------------------------------- -->
        <div id="artist" class="artist">
            <div class="pp-box">
              
              <div class="pp-name"><h1>Dorababu</h1>
                <h2>The Tattoo artist</h2>
              </div>
              <ul class="pp-content">
                <li>the professional certified tattoo artist</li>
                <li>founder of mokshya tattoo studois</li>
                <li>with an experience of 3 years in tattoo field</li>
              </ul>
            </div>
            

        </div>
        <!-- section -images -->
        <div id="images" class="images">
            <div class="">
                <div class="title">you choose we ink</div>
            </div>
            <div class="img-slider">
                <div class="slide active">
                  <img src="./images/slide-1.jpg" width= "1000px"
                  height= "600px" alt="">
                  <div class="info">
                    <!-- <h2>Slide 01</h2> -->
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
                  </div>
                </div>
                <div class="slide">
                  <img src="./images/slide-2.jpg" width= "1000px"
                  height= "600px" alt="">
                  <div class="info">
                    <!-- <h2>Slide 02</h2> -->
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
                  </div>
                </div>
                <div class="slide">
                  <img src="./images/slide-3.jpg" width= "1000px"
                  height= "600px"alt="">
                  <div class="info">
                    <!-- <h2>Slide 03</h2> -->
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
                  </div>
                </div>
                <div class="slide">
                  <img src="./images/slide-4.jpg" width= "1000px"
                  height= "600px" alt="">
                  <div class="info">
                    <!-- <h2>Slide 04</h2> -->
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
                  </div>
                </div>
                <div class="slide">
                  <img src="./images/istockphoto-510183990-640x640.jpg" width= "1000px"
                  height= "600px"alt="">
                  <div class="info">
                    <!-- <h2>Slide 05</h2> -->
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
                  </div>
                </div>
                <div class="navigation">
                  <div class="btn active"></div>
                  <div class="btn"></div>
                  <div class="btn"></div>
                  <div class="btn"></div>
                  <div class="btn"></div>
                </div>
              </div>
          
              <script type="text/javascript">
              var slides = document.querySelectorAll('.slide');
              var btns = document.querySelectorAll('.btn');
              let currentSlide = 1;
          
              // Javascript for image slider manual navigation
              var manualNav = function(manual){
                slides.forEach((slide) => {
                  slide.classList.remove('active');
          
                  btns.forEach((btn) => {
                    btn.classList.remove('active');
                  });
                });
          
                slides[manual].classList.add('active');
                btns[manual].classList.add('active');
              }
          
              btns.forEach((btn, i) => {
                btn.addEventListener("click", () => {
                  manualNav(i);
                  currentSlide = i;
                });
              });
          
              // Javascript for image slider autoplay navigation
              var repeat = function(activeClass){
                let active = document.getElementsByClassName('active');
                let i = 1;
          
                var repeater = () => {
                  setTimeout(function(){
                    [...active].forEach((activeSlide) => {
                      activeSlide.classList.remove('active');
                    });
          
                  slides[i].classList.add('active');
                  btns[i].classList.add('active');
                  i++;
          
                  if(slides.length == i){
                    i = 0;
                  }
                  if(i >= slides.length){
                    return;
                  }
                  repeater();
                }, 10000);
                }
                repeater();
              }
              repeat();
              </script>

        </div>
        <section class="vid-cont" id="vid-cont">
        <div class="videos">
          <video class="active" src="videos/v2.mp4" muted></video>
          
          
          <video src="videos/v4.mp4" muted></video>
          
         
          <video src="videos/v4.mp4" muted></video>
        </div>
       <div class="main-video">
          <video src="videos/v3.mp4" muted controls autoplay></video>
       </div>
      </section>
        <!-- contact section -->
        <section class="contact" id="contact">
          <div class="max-width">
              <h2 class="title">Contact us</h2>
              <div class="contact-content">
                  <div class="column left">
                      <div class="icons">
                          <div class="row">
                              <i class="fas fa-user"></i>
                              <div class="info">
                                  <div class="head">Name</div>
                                  <div class="sub-title">DORABABU TATTOO STUDIOS</div>
                              </div>
                          </div>
                          <div class="row">
                              <i class="fas fa-map-marker-alt"></i>
                              <div class="info">
                                  <div class="head">Address</div>
                                  <div class="sub-title">Andhra Pradesh, India</div>
                              </div>
                          </div>
                          <div class="row">
                              <i class="fas fa-envelope"></i>
                              <div class="info">
                                  <div class="head">Email</div>
                                  <div class="sub-title">dasaridorababu589@gmail.com</div>
                              </div>
                          </div>
                          <div class="row">
                              <i class="fas fa-mobile"></i>
                              <div class="info">
                                  <div class="head">Phone</div>
                                  <div class="sub-title">+919704612806</div>
                              </div>
                          </div>
                          
                      </div>
                      <iframe  id ="loaction"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3863.231640120803!2d78.8138993148387!3d14.471383989884941!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bb37217e447a6bf%3A0xe557b22b7a70adae!2sSivalayam%20Nabikot!5e0!3m2!1sen!2sin!4v1639404737000!5m2!1sen!2sin" width="800" height="400" style="border:2px solid yellow;" allowfullscreen="" loading="lazy"></iframe>
                  </div>
              </div>
          </div>
      </section>
        <!-- section-----------------2222---------------- -->
        
    </div>
    <footer>
      <span>Created By <a href="#">PRATHAP</a> | <span class="far fa-copyright"></span> 2021 All rights reserved.</span>
    </footer>
    <script src="v.js"></script>
    <!-- ------------------------------------------------ -->
    <script>
      //Get the button
      var mybutton = document.getElementById("myBtn");
      
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function() {scrollFunction()};
      
      function scrollFunction() {
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 20) {
          mybutton.style.display = "block";
        } else {
          mybutton.style.display = "none";
        }
      }
      
      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
      </script>

</body>
</html>


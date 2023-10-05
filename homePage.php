<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Critiva</title>
        <link rel="stylesheet" href="css/homePage.css" type="text/css">
        <script src="javascript/jquery-3.6.0.min.js"></script>
        <script src="https://kit.fontawesome.com/64d58efce2.js"crossorigin="anonymous"></script>
        <link type="text/javascript" src="javascript/jquerycdn.js">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- slider -->
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    </head>

  <?php
    session_start();
  ?>
    <body>
<!-- scrollTop -->
      <a id="top"><p id="arrow"></p></a>

<!-- main -->
        <div class="main-container">
            
             <header>
              <h2 onclick="location.href='homePage.php'">CRITIVA</h2> 
         
                  <form action="#" method="POST" class="search-bar" autocomplete="off">
                      <input type="text" placeholder="search anything" name="q">
                      <button type="submit"><img src="images/search-3-24.png"></button>
                  </form>
           
                <nav>
                  <ul class="nav-link">
                    <li><a href="homePage.php">Home</a></li>
                      <li><a href="categories.php">Catagories</a></li>
                      
            
               
                   </ul> 
                </nav>
                <?php 
                  if(isset($_SESSION['UserName'])){?>
                    <div class="cont">
              <a class="cta" href="#">
                  <div class="Btn"><?php echo $_SESSION['UserName'];?><i class="fa fa-caret-down" aria-hidden="true"></i></div>
                  <div class="float-card-info">
                  <i class="gg-close-r"></i>
                      <div class="imgbox"></div>
                      <p><?php echo $_SESSION['UserName'];?></p>
                      <a href="./partials/logout" target="_self" class="hire link">Logout</a>
  
  
                  </div>
                </a>
            </div>
                  <?php }else{?>
                      <a class="cta" href="login.php"><button>Login</button></a>
                <?php  }
                ?>
              <!-- <a class="cta" href="login.php"><button>Login</button></a> -->
              
             </header>
            
            <section>
              
                <div class="banner">
                    <div class="left-banner">
                        <h2>Review And Rating</h2>
                        <p>Get started to give and get review different goods and product that verifies the quality through Us.
                          join us on our platform where ther's baised review and free listing of services and goods for reviewing</p>
                        <center><a href="categories.php"><button>Explore Now!!</button></a></center>
                    
                    </div>
                    <div class="right-banner"></div>
                </div>
                
            </section>
<!-- new section -->
<section class="bigContainer"> 
  <h2>Browse By Categories</h2>
  <div class="container">

    <div class="card">
      <div class="content">
        <div class="imgBx"><img src="images/download.png"></div>
        <div class="contentBx">
        
        <h3>Restraunt<br><span>Best place to eat good food</span></h3>
        </div>
      </div>
      <ul class="sci">
        <li >
          <button value="explore NOw">Explore Now!</button>
          
        </li>
      </ul>
    </div>
    <div class="card">
      <div class="content">
        <div class="imgBx"><img src="images/Capture12.PNG"></div>
        <div class="contentBx">
        
        <h3>Automobiles<br><span>Best Automobiles like cars ,bike etc</span></h3>
        
        </div>
      </div>
      <ul class="sci">
        <li>
          <button value="explore NOw">Explore Now!</button>
          
        </li>
      </ul>
    </div>
    <div class="card">
      <div class="content">
        <div class="imgBx"><img src="images/15450496.jpg"></div>
        <div class="contentBx">
        
        <h3>Hotels<br><span>Best hotels to spend the night</span></h3>
        
          
        </div>
      </div>
      <ul class="sci">
        <li>
          <button value="explore NOw">Explore Now!</button>
          
        </li>
      </ul>
    </div>
    <div class="card">
      <div class="content">
        <div class="imgBx"><img src="images/11.jpg"></div>
        <div class="contentBx">
        
        <h3>Beauty and spas<br><span>Best  place to look good</span></h3>
        </div>
      </div>
      <ul class="sci">
        <li >
          <button value="explore NOw">Explore Now!</button>
          
        </li>
      </ul>
    </div>
    <div class="card">
      <div class="content">
        <div class="imgBx"><img src="images/13.png"></div>
        <div class="contentBx">
        
        <h3>Home services<br><span>Some of the most skilled people</span></h3>
        
        </div>
      </div>
      <ul class="sci">
        <li>
          <button value="explore NOw">Explore Now!</button>
          
        </li>
      </ul>
    </div>
    <div class="card">
      <div class="content">
        <div class="imgBx"><img src="images/istockphoto-1186972006-612x612.jpg"></div>
        <div class="contentBx">
        
        <h3>Others<br><span>and many more</span></h3>
        
          
        </div>
      </div>
      <ul class="sci">
        <li >
          <button value="explore NOw">Explore now!</button>
          
        </li>
      </ul>
    </div>
    
</div>
</section>
              


              
         
          

          
          
      
      <section>
          <div class="hero-content">
             
                <div class="left-hero-content-wrapper">
                  <div class="left-hero-content">
                  </div>  
                </div>
                

            <div class="right-hero-content-wrapper">
                <div class="right-hero-content">
                   <h2>Tell Us Your Thoughts </h2>
                   <h4>And Redefine the Meaning Of Reviewing, Through Us</h4>
                 <a href="#"><button>Connect With Us</button></a>
                </div>
            </div>
          </div>
        </section>
    <!-- newdivsion -->
        
    <div class="featured-container">
        <div class="featured-heading">
                <span>featured</span>
                <h1>Products</h1>
            </div></div><br>

           
<section class="featured-small-container">
            <div class="f-container">    
 <!-- slider1-->
     
      <div class="card">
      <a href="./product.php">
        <div class="content">
          <div class="imgBx"><img src="images/download.jpg"></div>
          <div class="contentBx">
          
          <h3>Burger House</h3></div>
          <div class="Product-review">
                        <i class="fas fa-star "></i> 3.5/5
                        

                       </div></h3>
                       <button value="explore NOW">Review</button>

        </div>
       

         
        </a>
      </div>
   
 <!-- slider2 -->
      
      <div class="card">
      <a href="./product.php">
        <div class="content">
          <div class="imgBx"><img src="images/download.jpg"></div>
          <div class="contentBx">
          
          <h3>Burger House</div>
          <div class="Product-review">
                        <i class="fas fa-star "></i> 3.5/5
                        

                       </div></h3>
                       <button value="explore NOW">Review</button>

        </div>
       
           
        </a>
      </div>
 

 <!-- slider3 -->

      <div class="card">
      <a href="./product.php">
        <div class="content">
          <div class="imgBx"><img src="images/download.jpg"></div>
          <div class="contentBx">
          
          <h3>Burger House</div>
          <div class="Product-review">
                        <i class="fas fa-star "></i> 3.5/5
                        

                       </div></h3>
                       <button value="explore NOW">Review</button>

        </div>
       

          
        </a>
      </div>


 <!-- slider4 -->
    
      <div class="card">
      <a href="./product.php">
        <div class="content">
          <div class="imgBx"><img src="images/download.jpg"></div>
          <div class="contentBx">
          
          <h3>Burger House</div>
          <div class="Product-review">
                        <i class="fas fa-star "></i> 3.5/5
                        

                       </div></h3>
                       <button value="explore NOW">Review</button>

        </div>
        

            
        </a>
      </div>
     
        <!-- slider4 -->
      
      <div class="card">
      <a href="./product.php">
        <div class="content">
          <div class="imgBx"><img src="images/download.jpg"></div>
          <div class="contentBx">
          
          <h3>Burger House</div>
          <div class="Product-review">
                        <i class="fas fa-star "></i> 3.5/5
                        

                       </div></h3>
                       <button value="explore NOW">Review</button>

        </div>
        

           
        </a>
      </div>
    
        <!-- slider4 -->
      
      <div class="card">
      <a href="./product.php">
        <div class="content">
          <div class="imgBx"><img src="images/download.jpg"></div>
          <div class="contentBx">
          
          <h3>Burger House</div>
          <div class="Product-review">
                        <i class="fas fa-star "></i> 3.5/5
                        

                       </div></h3>
                       <button value="explore NOW">Review</button>

        </div>
      

        
        </a>
      </div>
  
        <!-- slider4 -->
      
      <div class="card">
      <a href="./product.php">
        <div class="content">
          <div class="imgBx"><img src="images/download.jpg"></div>
          <div class="contentBx">
          
          <h3>Burger House</div>
          <div class="Product-review">
                        <i class="fas fa-star "></i> 3.5/5
                        

                       </div></h3>
                       <button value="explore NOW">Review</button>

        </div>
        

        </a>
      </div>
    
       
       <!-- slider4 -->

       <div class="card">
      <a href="./product.php">
        <div class="content">
          <div class="imgBx"><img src="images/download.jpg"></div>
          <div class="contentBx">
          
          <h3>Burger House</div>
          <div class="Product-review">
                        <i class="fas fa-star "></i> 3.5/5
                        

                       </div></h3>
                       <button value="explore NOW">Review</button>

        </div>
        

         
        </a>
      </div>

     
  </div>
  </section>
  </li>
     </ul>

<!-- login baner -->
<div class="login-banner">
  <h4>Interested? Connect with us</h4>
  <div class="btn-container">
  <button class="">Sign up</button>
  <button class="">Get Started</button>
  </div>
</div>

<!-- footer division -->
<footer>
<div class="upper-footer">
  <div class="upper-footer-logo"> <H1>CRITIVA</H1> </div>
  <div class="upper-footer-content">
  <div class="upper-footer-container">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>navigation</h4>
  	 			<ul>
  	 				<li><a href="#">home</a></li>
  	 				<li><a href="#">about us</a></li>
             <li><a href="#">our services</a></li>
             <li><a href="#">features</a></li>
  	 				<li><a href="#">contact us</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>categories</h4>
  	 			<ul>
  	 				<li><a href="#">Restraunt</a></li>
  	 				<li><a href="#">automobiles</a></li>
  	 				<li><a href="#">beauty and spas</a></li>
  	 				<li><a href="#">hotels</a></li>
             <li><a href="#">home services</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Help and support</h4>
  	 			<ul>
  	 				<li><a href="#">FAQ</a></li>
  	 				<li><a href="#">supports</a></li>
  	 				<li><a href="#">resources</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>follow us</h4>
           <ul >
  	 				<li id="footer-text"><i class="fa fa-phone" aria-hidden="true"></i>9840172168,01446645</li>
  	 				<li id="footer-text"><i class="fa fa-map-marker" aria-hidden="true"></i>Kathmandu, Nepal</li>
  	 				<li id="footer-text"><i class="fa fa-envelope" aria-hidden="true"></i>critiva@gmail.com</li>
  	 			</ul>
  	 			<div class="social-links">
  	 				<a href="#"><i class="fab fa-facebook-f"></i></a>
  	 				<a href="#"><i class="fab fa-twitter"></i></a>
  	 				<a href="#"><i class="fab fa-instagram"></i></a>
  	 				
  	 			</div>
  	 		</div>
  	 	</div>
  	 </div>
  </div>
  <div class="upper-footer-image">
    <img src="../userPanel/images/log.svg" alt="" >
  </div>
</div>
       <div class="rights-container">
       <center>All Rights Reserved<br>@critiva.com</center>
       </div>
     </footer>    
        
</div>   
        
<!-- scrolltotop script -->
     <script type="text/javascript" src="javascript/style.js"></script>
     <script type="text/javascript">
      
      $(window).scroll(function()
      {
          if ($(window).scrollTop() > 200)
          {
            $("#top").fadeIn();  
          }
          else
          {
              $("#top").fadeOut();
          }
      });

      
      $("#top").click(function()
      {
          $('html,body').animate({scrollTop:0},  800);
        }); 
      
      </Script>   
    </body>
</html>
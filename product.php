<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-eqivalent="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>review</title>
        <link rel="stylesheet" href="css/product.css">
        <!-- FOR-ICON -->
        <link rel="shortcut icon" href="images/1092622.png">
        <!-- FOR-SCROLLTOTOP -->
        <script src="javascript/jquery-3.6.0.min.js"></script>
        <!-- for icons -->
        <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
        <!--for zoom for image  -->
        <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
	<script src='../userPanel/javascript/jquery.zoom.js'></script>
	<script>
		$(document).ready(function(){
			$('#ex1').zoom();
			$('#ex2').zoom({ on:'grab' });
			$('#ex3').zoom({ on:'click' });			 
			$('#ex4').zoom({ on:'toggle' });
		});
	</script>
    </head>
    <body>
        <!-- scrollTop -->
      <a id="top"><p id="arrow"></p></a>

      <!-- MAIN -->
        <div class="main-container">
        <!-- nav-bar -->
        <header>
            <h2 onclick="location.href='homePage.php'">CRITIVA</h2> 
       
                <form action="https:/google.com/search" method="post" class="search-bar">
                    <input typo="text" placeholder="search anything" name="q">
                    <button type="submit"><img src="images/search-3-24.png"></button>
                </form>
         
              <nav>
                <ul class="nav-link">
                  <li><a href="homePage.php">Home</a></li>
                    <li><a href="categories.php">Categories</a></li>
                    
          
             
                 </ul> 
              </nav>
            <a class="cta" href="login.php"><button>Login</button></a>
            
           </header>
           <!-- product-banner -->
           <div class="small-container single-product">
               <div class="row">
                   <div class="col-2">
                   <span class='zoom' id='ex3'>
                       <img src="images/blue (2).jpg"  id="productImg">
                   </span>
                       <div class="small-img-row">
                           
                           </div>
                   </div>
                   <div class="col-2">
                       <P>Home/Automobiles/MTB</P>
                       <h1>Zeus MTB 27.5</h1>
                       
                       <div class="Product-review">
                        <i class="fas fa-star"></i> 3.5/5
                        

                       </div>
                     
                       <a href="review.php" class="btn">Start Reviewing</a>
                       <a href="#testimonials" class="btn">Search Reviews</a>
                       <h3>Product Details<i class="fa fa-indent"></i></h3>
                       <div class="description-container">
                       <p>
                        <b>PRICE:</b> $699<br>
                        <b>WEIGHT:</b> 14.5 kg<br>
                        <b>SUSPENSION:</b> Hardtail<br>
                        <b>TRAVEL:</b> l80mm front<br>
                        <span class="read-more-text">
                        <b>FRAME:</b> Aluminium<br>
                        <b>GROUPSET:</b>Altus, Shimano<br>
                        <b>BRAKES:</b>Hydraulic Disc<br>
                        </span>
                        
                    </p>
                    <span class="read-more-btn">Read More...</span> 
                    </div>  
                   </div>
               </div>
           </div>





        <!-- Reviews/comment -->
        <section id="testimonials">

            <div class="testimonial-heading">
                <span>reviews</span>
                <h1>Critiva</h1>
            </div>
            <div class="testimonial-box-container">

                <div class="testimonial-box">
                    <div class="box-top">
                        <div class="profile">
                            <div class="profile-img">
                                <img src="images/1092578.jpg">
                            </div>
                            <div class="name-user">
                                <strong>savdjhasdjha</strong>
                                <span>@asdbkjasbd</span>
                            </div>
                        </div>
                        <div class="review">
                            <i class="fas fa-star "></i> 3.5/5
                            

                        </div>
                    </div>
                    <div class="client-comment">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, dignissimos placeat. A vero, exercitationem deserunt magni inventore, quibusdam minus ut quos maxime iusto fuga dolores magnam. Ratione aliquid reprehenderit quasi!</p>
                    </div>
                    <div class="likes">
                    <i class="fas fa-heart">12</i>
                    <i class="fas fa-comment"></i>                           
                        </div>
                </div>
            </div>

        </section>

 <!-- footer division -->
     <footer>
       <center>All rights reserved<br>@critiva.com</center>
     </footer>    
        
</div>

    </div>
    <!-- FOR-READMORE -->
    <script src="javascript/readmore.js"></script>

    <!-- FOR-SCROLLTOTOP -->
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